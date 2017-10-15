<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Employee;
use App\Student;
use App\Patient;
use App\Appointment;
use DB;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
             $user = Auth::id();
        $doctorfirst = DB::table('tbl_doctor')->join('users', 'users.id', '=', 'tbl_doctor.users_id')->select('tbl_doctor.doctor_id')->where('users.id', '=', $user)->first();


        $doctor =0;
        
        foreach ((array)$doctorfirst as $v) {
        
           $doctor += intval($v);
        
         }     

         $appointment = DB::table('t_appointment')->join('tbl_doctor', 'tbl_doctor.doctor_id', '=', 't_appointment.doctor_id')->join('users as ud', 'tbl_doctor.users_id', '=', 'ud.id')->join('tbl_patient', 'tbl_patient.patient_id', '=', 't_appointment.patient_id')->join('users as up', 'tbl_patient.users_id', '=', 'up.id')->select('t_appointment.doctor_id','tbl_patient.patient_id','up.first_name as patient_first','up.last_name as patient_last','tbl_patient.patient_account_no','ud.first_name as doctor_first','ud.last_name as doctor_last','appointment_id','appointment_reason','appointment_datetime_started','appointment_datetime_ended','appointment_status_done')->where('appointment_datetime_started', '>',carbon::today())->where('appointment_datetime_started', '<',carbon::today()->addMinutes(1438))->where('appointment_status',1)->where('t_appointment.doctor_id',$doctor)->paginate(15000);


           $walk = DB::table('t_walk_in_request')->join('tbl_doctor', 'tbl_doctor.doctor_id', '=', 't_walk_in_request.doctor_id')->join('users as ud', 'tbl_doctor.users_id', '=', 'ud.id')->join('tbl_patient', 'tbl_patient.patient_id', '=', 't_walk_in_request.patient_id')->join('users as up', 'tbl_patient.users_id', '=', 'up.id')->select('t_walk_in_request.walk_in_no','t_walk_in_request.doctor_id','t_walk_in_request.walk_in_level_emergency','tbl_patient.patient_id','up.first_name as patient_first','up.last_name as patient_last','tbl_patient.patient_account_no','ud.first_name as doctor_first','ud.last_name as doctor_last','t_walk_in_request.walk_in_id','walk_in_no','walk_in_reason')->where('walk_in_status',0)->where('t_walk_in_request.doctor_id',$doctor)->paginate(15000);
       
        $countpatient = Patient::count();
         $countapp =  DB::table('t_appointment')->join('tbl_doctor', 'tbl_doctor.doctor_id', '=', 't_appointment.doctor_id')->join('users as ud', 'tbl_doctor.users_id', '=', 'ud.id')->join('tbl_patient', 'tbl_patient.patient_id', '=', 't_appointment.patient_id')->join('users as up', 'tbl_patient.users_id', '=', 'up.id')->select(DB::raw("count(t_appointment.appointment_id) as count"))->where('appointment_status',1)->where('appointment_datetime_started', '>',carbon::today())->where('appointment_datetime_started', '<',carbon::today()->addMinutes(1438))->groupBy('appointment_id')->get();
     
         return view('layouts.doctor.doctor_dashboard', compact('appointment', 'countpatient', 'countapp','walk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.doctor.doctor_appointment_list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
