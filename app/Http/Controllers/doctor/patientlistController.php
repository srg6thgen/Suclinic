<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Employee;
use App\Patient;

class patientlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patient_emplist = DB::table('tbl_patient')->join('tbl_employee', 'tbl_employee.employee_id', '=', 'tbl_patient.employee_id')->select('tbl_patient.patient_id','tbl_patient.users_id','tbl_patient.employee_id','patient_account_no','tbl_patient.patient_reg_date','tbl_employee.employee_id','tbl_employee.employee_number', 'tbl_employee.employee_firstname', 'tbl_employee.employee_middlename', 'tbl_employee.employee_lastname', 'tbl_employee.employee_position')->paginate(15000);

        $patient_studlist = DB::table('tbl_patient')->join('tbl_student', 'tbl_student.student_id', '=', 'tbl_patient.student_id')->select('tbl_patient.patient_id','tbl_patient.users_id','tbl_patient.student_id','patient_account_no','tbl_patient.patient_reg_date','tbl_student.student_id','tbl_student.student_number', 'tbl_student.student_firstname', 'tbl_student.student_middlename', 'tbl_student.student_lastname')->paginate(15000);

        return view('layouts.doctor.doctor_patient_list', compact('patient_emplist', 'patient_studlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.doctor.doctor_patient_list');
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
