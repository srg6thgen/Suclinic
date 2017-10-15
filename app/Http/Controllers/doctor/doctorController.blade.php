<?php
namespace App\Http\Controllers\doctor;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Employee;
use App\Patient;

class doctorController extends Controller
{
    
    public function doctor_dashboard()
    {
        return view('layouts.doctor.doctor_dashboard');
    }
    
    public function doctor_visit_list()
    {
        return view('layouts.doctor.doctor_visit_list');
    }

    public function doctor_transaction()
    {
        return view('layouts.doctor.doctor_transaction');
    }

}