<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Excel;
use App\User;
use App\Role;
use App\Staff;
use App\Doctor;
use App\Course;
use App\Employee;
use App\Student;
use Redirect;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $student = DB::table('tbl_student')->join('tbl_student_course', 'tbl_student_course.student_id', '=', 'tbl_student.student_id')->select('student_number','student_status','student_firstname','student_lastname','student_middlename','student_status','student_course_name')->where('student_course_date_expiry','>', Carbon::now())->paginate(15000);
          return view('layouts.admin.setup_student',compact('student'));

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
        //

       $get_student_id = Student::insertGetId([
         'student_number' => $request->studentnumber,
         'student_firstname' => $request->firstname,
         'student_middlename' => $request->middlename,
         'student_lastname' => $request->lastname,
         'student_email' => $request->email,
         'student_gender' => $request->genderSelect,
         'student_address' => $request->address,
         'student_city' => $request->city,
         'student_zip_code' => $request->zipcode,
         'student_birthdate'=> "1997-07-27",
         'student_reg_date' => Carbon::now(),
                ]);

      return  $this->post_student_course($request, $get_student_id);
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
    public function post_student_course($request, $get_student_id) 
    {   
     Course::insert([
       'student_id' => $get_student_id,
       'student_status' => $request->status,
       'student_course_name' => $request->student_course_name,
       'student_course_section' =>$request->student_course_section,
       'student_course_date_added' =>  Carbon::now(),
       'student_course_date_expiry' => '2018-07-07',
       'student_course_active' => 1,
       ]);
    return redirect()->route('ManageStudent.index');
    }

    public function importFileIntoDB_Student(Request $request)
    {
         
        if($request->hasFile('stud_file')){
            $path = $request->file('stud_file')->getRealPath();
            $data = \Excel::load($path)->get();
        
            if($data->count()){
                //get latest last id of student. declare var for get latest id

                $count = Student::count();


                $student_fin =0;
                if ($count > 0){

                   $student_id = DB::table('tbl_student')->select('student_id')->orderBy('student_id', 'DESC')->first();
                    
                  
                    foreach ((array)$student_id as $v) {
                      $student_fin += intval($v);
                    }     
                }

                if($count==0)
                {
                    $student_fin = 0;
                }
          
                foreach ($data as $key => $value) {
          
                    $student_fin = $student_fin + 1; 

                    $timeNow = date("Y-m-d H:i:s");
                    $arr[] = ['student_number' => $value->student_number, 'student_firstname' => $value->firstname,'student_lastname' => $value->lastname, 'student_middlename' => $value->middlename,'student_email' => $value->email, 'student_address' => $value->address,'student_gender' => $value->gender,'student_city' => $value->city,'student_zip_code' => $value->zip_code,'student_birthdate' => $value->birthdate,'student_reg_date'=> $timeNow];

                   $studcourse[] = ['student_id' =>$student_fin, 'student_status' => $value->status,'student_course_name' => $value->course, 'student_course_section' => $value->course_section,'student_course_date_added' => $timeNow, 'student_course_date_expiry' => $value->course_date_expiry, 'student_course_active' =>1];
                }

                if(!empty($arr)){
                    \DB::table('tbl_student')->insert($arr);
                    \DB::table('tbl_student_course')->insert($studcourse); 
                         return redirect()->route('ManageStudent.index');

                } 
                    
            }
        }

     
    } 


}
