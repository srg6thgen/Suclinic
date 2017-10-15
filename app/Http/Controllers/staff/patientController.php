<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Employee;
use App\Student;
use App\Patient;
use DB;
use Illuminate\Support\Facades\Auth;

class patientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    $patient = DB::table('tbl_patient')->join('users', 'tbl_patient.users_id', '=', 'id')->select('tbl_patient.patient_id','tbl_patient.patient_account_no','users.first_name','users.last_name','users.gender','users.middle_name')->paginate(15000);



     $employee = DB::table('tbl_employee')->select('employee_id','employee_number','employee_firstname','employee_lastname','employee_middlename','employee_position','employee_gender', 'employee_email', 'employee_address','employee_city', 'employee_zip_code','employee_birthdate' )->paginate(15000); 

    $student = DB::table('tbl_student')->join('tbl_student_course', 'tbl_student_course.student_id', '=', 'tbl_student.student_id')->select('tbl_student.student_id','student_number','student_status','student_firstname','student_lastname','student_middlename','student_status','student_course_name')->where('student_course_date_expiry','>', Carbon::now())->paginate(15000);
        return view('layouts.staff.setup_patient_employee',compact('employee', 'student', 'patient'));
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

     public function employee_store(Request
        $request, $id)
    {
        
          $employee[] = DB::table('tbl_employee')->select('employee_id','employee_number','employee_firstname','employee_lastname','employee_middlename','employee_position','employee_gender', 'employee_email', 'employee_address','employee_city', 'employee_zip_code','employee_birthdate' )->where('employee_id','=', $id)->get(); 
            
            $data = array_flatten($employee);
            $data = array_map(function($object){
             return (array) $object;
            }, $data);



             $emp_id = implode(array_column($data, 'employee_id'));
             $firstname = implode(array_column($data, 'employee_firstname'));
             $middlename = implode(array_column($data, 'employee_middlename'));
             $lastname = implode(array_column($data, 'employee_lastname'));
             $gender = implode(array_column($data, 'employee_gender'));
             $email = implode(array_column($data, 'employee_email'));
             $address = implode(array_column($data, 'employee_address'));
             $city = implode(array_column($data, 'employee_city'));
             $zipcode = implode(array_column($data, 'employee_zip_code'));
             $birthdate = implode(array_column($data, 'employee_birthdate'));
         


            //insert validation here

        /*        $this->validate($request, [
    'first_name' => 'required|unique:tbl_appointment_type',
    'middle_name' => 'required',
    'last_name'
        ]);*/


                     $this->validate($request, [
    'emp_id' => 'unique:tbl_patient',
        ]);

                $user_id = User::insertGetId([
                'first_name' => $firstname,
                 'middle_name' => $middlename,
                 'last_name' => $lastname,
                 'email' => $email,
                 'gender' => $gender,
                 'address' => $address,
                 'zip_code' => $zipcode,
                 'city' => $city,
                 'role_id'=> 4,
                 'username' =>  $email,
                 'password' => bcrypt('sample'),
                 'birth_date' => $birthdate,
                 'active' => 1,
                 'remember_token'=>str_random(10)

                     ]);
     

             return $this->employee_patient_store($user_id, $emp_id);
          
 
                
    }


     public function employee_patient_store($user_id, $emp_id)
    {
        $user = Auth::id();
        $staffid = DB::table('tbl_staff')->join('users', 'users.id', '=', 'tbl_staff.users_id')->select('tbl_staff.staff_id')->where('users.id', '=', $user)->first();


        $staff_fin =0;
        
        foreach ((array)$staffid as $v) {
        
           $staff_fin += intval($v);
        
         }     
           $count = Patient::count() + 1;
 

                Patient::insert([
                 'users_id' => $user_id,
                 'staff_id' => $staff_fin,
                 'employee_id' => $emp_id,
                 'patient_account_no' =>Carbon::now()->toDateString() . '-' . $emp_id. '-' . $count,
                 'patient_reg_date'=>Carbon::now()
                     ]);

        return redirect()->route('AddPatient.index'); 

    }


















      public function student_store($id)
    {
        
          $student[] = DB::table('tbl_student')->select('student_id','student_number','student_firstname','student_lastname','student_middlename','student_gender', 'student_email', 'student_address','student_city', 'student_zip_code','student_birthdate' )->where('student_id','=', $id)->get(); 
            
            $data = array_flatten($student);

            $data = array_map(function($object){
             return (array) $object;
            }, $data);



             $stud_id = implode(array_column($data, 'student_id'));
             $firstname = implode(array_column($data, 'student_firstname'));
             $middlename = implode(array_column($data, 'student_middlename'));
             $lastname = implode(array_column($data, 'student_lastname'));
             $gender = implode(array_column($data, 'student_gender'));
             $email = implode(array_column($data, 'student_email'));
             $address = implode(array_column($data, 'student_address'));
             $city = implode(array_column($data, 'student_city'));
             $zipcode = implode(array_column($data, 'student_zip_code'));
             $birthdate = implode(array_column($data, 'student_birthdate'));
         



            //insert validation here

                $user_id = User::insertGetId([
                'first_name' => $firstname,
                 'middle_name' => $middlename,
                 'last_name' => $lastname,
                 'email' => $email,
                 'gender' => $gender,
                 'address' => $address,
                 'zip_code' => $zipcode,
                 'city' => $city,
                 'role_id'=> 4,
                 'username' =>  $email,
                 'password' => bcrypt('sample'),
                 'birth_date' => $birthdate,
                 'active' => 1,
                 'remember_token'=>str_random(10)

                     ]);
     

             return $this->employee_student_store($user_id, $stud_id);
          
 
                
    }


     public function employee_student_store($user_id, $stud_id)
    {
        $user = Auth::id();
        $staffid = DB::table('tbl_staff')->join('users', 'users.id', '=', 'tbl_staff.users_id')->select('tbl_staff.staff_id')->where('users.id', '=', $user)->first();


        $staff_fin =0;
        
        foreach ((array)$staffid as $v) {
        
           $staff_fin += intval($v);
        
         }     
           $count = Patient::count() + 1;
 

                Patient::insert([
                 'users_id' => $user_id,
                 'staff_id' => $staff_fin,
                 'student_id' => $stud_id,
                 'patient_account_no' =>Carbon::now()->toDateString() . '-' . $stud_id. '-' . $count,
                 'patient_reg_date'=>Carbon::now()
                     ]);

        return redirect()->route('AddPatient.index'); 

    }



}
