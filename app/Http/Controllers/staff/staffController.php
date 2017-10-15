<?php

namespace App\Http\Controllers\staff;

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
class staffController extends Controller
{
	
    public function staff_dashboard()
    {



        $appointment = DB::table('t_appointment')->join('tbl_doctor', 'tbl_doctor.doctor_id', '=', 't_appointment.doctor_id')->join('users as ud', 'tbl_doctor.users_id', '=', 'ud.id')->join('tbl_patient', 'tbl_patient.patient_id', '=', 't_appointment.patient_id')->join('users as up', 'tbl_patient.users_id', '=', 'up.id')->select('up.first_name as patient_first','up.last_name as patient_last','tbl_patient.patient_account_no','ud.first_name as doctor_first','ud.last_name as doctor_last','appointment_reason','appointment_datetime_started','appointment_datetime_ended','appointment_datetime_allowance_end','appointment_status_done'  )->where('appointment_status',1)->where('appointment_datetime_started', '>',carbon::today())->where('appointment_datetime_started', '<',carbon::today()->addMinutes(1438))->paginate(15000);
        
          $walk = DB::table('t_walk_in_request')->join('tbl_doctor', 'tbl_doctor.doctor_id', '=', 't_walk_in_request.doctor_id')->join('users as ud', 'tbl_doctor.users_id', '=', 'ud.id')->join('tbl_patient', 'tbl_patient.patient_id', '=', 't_walk_in_request.patient_id')->join('users as up', 'tbl_patient.users_id', '=', 'up.id')->select('t_walk_in_request.walk_in_no','t_walk_in_request.doctor_id','t_walk_in_request.walk_in_level_emergency','walk_in_status','tbl_patient.patient_id','up.first_name as patient_first','up.last_name as patient_last','tbl_patient.patient_account_no','ud.first_name as doctor_first','ud.last_name as doctor_last','walk_in_id','walk_in_no','walk_in_reason')->where('walk_in_date_recorded', '>',carbon::today())->where('walk_in_date_recorded', '<',carbon::today()->addMinutes(1438))->paginate(15000);
       
        $countpatient = Patient::count();
         $countapp =  DB::table('t_appointment')->join('tbl_doctor', 'tbl_doctor.doctor_id', '=', 't_appointment.doctor_id')->join('users as ud', 'tbl_doctor.users_id', '=', 'ud.id')->join('tbl_patient', 'tbl_patient.patient_id', '=', 't_appointment.patient_id')->join('users as up', 'tbl_patient.users_id', '=', 'up.id')->select(DB::raw("count(t_appointment.appointment_id) as count"))->where('appointment_status',1)->where('appointment_datetime_started', '>',carbon::today())->where('appointment_datetime_started', '<',carbon::today()->addMinutes(1438))->groupBy('appointment_id')->get();

        return view('layouts.staff.staff_dashboard', compact('appointment', 'countpatient', 'countapp','walk'));


    }

           /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('staff');
    }




	
}