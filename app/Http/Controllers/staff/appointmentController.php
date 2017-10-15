<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Employee;
use App\Student;
use App\Patient;
use App\Doctor;
use App\Appointment;
use Calendar;
use Redirect;
use DB;
use Illuminate\Support\Facades\Auth;

class appointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    $patient_student = DB::table('tbl_patient')->join('tbl_student', 'tbl_student.student_id', '=', 'tbl_patient.student_id')->select('patient_id','tbl_student.student_id','patient_account_no','student_firstname','student_middlename','student_lastname')->paginate(15000);



    $patient_employee = DB::table('tbl_patient')->join('tbl_employee', 'tbl_patient.employee_id', '=', 'tbl_employee.employee_id')->select('patient_id','patient_account_no','employee_firstname','employee_middlename','employee_lastname')->paginate(20000); 

    $doctor = DB::table('users')->join('tbl_doctor', 'tbl_doctor.users_id', '=', 'id')->select('doctor_id','users.first_name','users.last_name','users.gender','users.middle_name')->paginate(15000);


    $apptype = DB::table('tbl_appointment_type')->select('appointment_type_id', 'appointment_type_title', 'appointment_type_duration')->paginate(15000);




           $appointment = [];

    /*   $data = Appointment::all();*/
       $data = DB::table('t_appointment')->join('tbl_patient', 'tbl_patient.patient_id', '=', 't_appointment.patient_id')->join('users', 'tbl_patient.users_id', '=', 'users.id')->select('first_name','last_name','appointment_datetime_started','appointment_datetime_ended')->where('appointment_status',1)->get();

       if($data->count()){

          foreach ($data as $key => $value) {

            $appointment[] = Calendar::event(

                $value->first_name .' '.  $value->last_name,

                true,

                new \DateTime($value->appointment_datetime_started),

                new \DateTime($value->appointment_datetime_ended)

            );

          }

       }

      $calendar = Calendar::addEvents($appointment); 



        return view('layouts.staff.t_appointment',compact('patient_student', 'patient_employee', 'doctor','apptype','calendar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    //validate input first
     $appointment = DB::table('t_appointment')->join('tbl_doctor', 'tbl_doctor.doctor_id', '=', 't_appointment.doctor_id')->join('users as ud', 'tbl_doctor.users_id', '=', 'ud.id')->join('tbl_patient', 'tbl_patient.patient_id', '=', 't_appointment.patient_id')->join('users as up', 'tbl_patient.users_id', '=', 'up.id')->select('up.first_name as patient_first','up.last_name as patient_last','tbl_patient.patient_account_no','ud.first_name as doctor_first','ud.last_name as doctor_last','appointment_reason','appointment_datetime_started','appointment_datetime_ended','appointment_datetime_allowance_end','appointment_status_done'  )->where('appointment_status',1)->where('appointment_datetime_started', '>',carbon::today())->where('appointment_datetime_started', '<',carbon::today()->addMinutes(1400))->get();



    $flag = 0;
    foreach($appointment as $key =>$a)
    {
        if ($request->appointment_time >= $a->appointment_datetime_started && $request->appointment_time <= $a->appointment_datetime_allowance_end)
        {
            $flag=1;
        }

    }
    if($flag == 0)
    {
       //staff get id
        $user = Auth::id();
        $staffid = DB::table('tbl_staff')->join('users', 'users.id', '=', 'tbl_staff.users_id')->select('tbl_staff.staff_id')->where('users.id', '=', $user)->first();


        $staff_fin =0;
        
        foreach ((array)$staffid as $v) {
        
           $staff_fin += intval($v);
        
         }



         //get duration
         $duration_query = DB::table('tbl_appointment_type')->select('appointment_type_duration')->where('appointment_type_id', '=', $request->appointment_type)->first();     

        $duration =0;
        
        foreach ((array)$duration_query as $d) {
        
           $duration += intval($d);
        
         }

            //get allowance
         $allowance_query = DB::table('tbl_appointment_type')->select('appointment_type_allowance')->where('appointment_type_id', '=', $request->appointment_type)->first();     

        $allowance =0;
        
        foreach ((array)$allowance_query as $a) {
        
           $allowance += intval($a);
        
         }
         //count for appointment no.
         //count for appointment no.
          $count = Appointment::count() + 1;

        // insert appointment





       

          Appointment::insert([
                 'patient_id' =>$request->patient,
                 'staff_id' =>$staff_fin,
                 'doctor_id' =>$request->doctor,
                 'appointment_type_id' =>$request->appointment_type,
                 'appointment_no' =>Carbon::now()->toDateString() . '-' . $count,
                 'appointment_reason'=>$request->reason,
                 'appointment_date_recorded'=>Carbon::now(),
                 'appointment_datetime_started' =>$request->appointment_time,
                 'appointment_datetime_ended' =>Carbon::parse($request->appointment_time)->addMinutes($duration),
                  'appointment_datetime_allowance_end' =>Carbon::parse($request->appointment_time)->addMinutes($duration)->addMinutes($allowance),
                 'appointment_status_done' =>0,
                 'appointment_status' =>1
                     ]);

        return redirect()->route('Appointment.index'); 

    }

    else if ($flag == 1){
        return Redirect::back()->withErrors(['Time not available']);
    }

     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



}
