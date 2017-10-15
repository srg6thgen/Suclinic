<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
           $employee = DB::table('tbl_employee')->select('employee_number','employee_firstname','employee_lastname','employee_middlename','employee_position','employee_birthdate')->paginate(15000); 
          return view('layouts.admin.setup_employee',compact('employee'));
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

         Employee::insert([
         'employee_number' => $request->empnumber,
         'employee_firstname' => $request->firstname,
         'employee_middlename' => $request->middlename,
         'employee_lastname' => $request->lastname,
         'employee_email' => $request->email,
         'employee_gender' => $request->genderRadios,
         'employee_address' => $request->address,
         'employee_city' => $request->city,
         'employee_zip_code' => $request->ZipCode,
         'employee_birthdate'=> "1997-07-27",
         'employee_reg_date' => "2017-07-27",
         'employee_position' => $request->position,
         'employee_active' => 1

            ]);
     
                return redirect()->route('ManageEmployee.index'); 
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


    public function importFileIntoDB_Employee(Request $request)
    {
        if($request->hasFile('emp_file')){
            $path = $request->file('emp_file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $mytime = date("Y-m-d H:i:s");
                    $arr[] = ['employee_number' => $value->employee_number, 'employee_firstname' => $value->employee_firstname,'employee_lastname' => $value->employee_lastname, 'employee_middlename' => $value->employee_middlename,'employee_gender' => $value->employee_gender,'employee_email' => $value->employee_email, 'employee_address' => $value->employee_address,'employee_city' => $value->employee_city,'employee_zip_code' => $value->employee_zip_code,'employee_birthdate' => $value->employee_birthdate,'employee_position' => $value->employee_position,'employee_active' =>1, 'employee_reg_date'=> $mytime];
                }
                if(!empty($arr)){
            
                    \DB::table('tbl_employee')->insert($arr);
      
                return redirect()->route('ManageEmployee.index'); 
                }
                      
            }
        }

     
    }
}
