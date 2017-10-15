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
class UtilityController extends Controller
{
	
    public function staff_dashboard()
    {


        
        return view('layouts.staff.staff_dashboard');

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

     public function setup_student()
    {
        return view('layouts.staff.setup_patient_student');
    }
    public function setup_medicine_stored()
    {
        return view('layouts.staff.setup_medicine_stored');
    }
    public function setup_utility()
    {
        return view('layouts.staff.setup_utility');
    }
        public function medicine_issuance()
    {
        return view('layouts.staff.t_medicine_issuance');
    }
            public function t_appointment()
    {
        return view('layouts.staff.t_appointment');
    }
                public function t_vitals()
    {
        return view('layouts.staff.t_vitals');
    }
	
}