<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Employee;
use App\Student;
use App\Patient;
use App\Walk_in;
use DB;
use Illuminate\Support\Facades\Auth;

class walkinController extends Controller
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
     $doctor = DB::table('users')->join('tbl_doctor', 'tbl_doctor.users_id', '=', 'id')->select('doctor_id','users.first_name','users.last_name','users.gender','users.middle_name')->paginate(15000);

        return view('layouts.staff.t_walk_in',compact('patient','doctor'));
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
    public function store(Request $request, $patientid)
    {
        $user = Auth::id();
          $staffid = DB::table('tbl_staff')->join('users', 'users.id', '=', 'tbl_staff.users_id')->select('tbl_staff.staff_id')->where('users.id', '=', $user)->first();

        $staff_fin = 0;
        
        foreach ((array)$staffid as $v) {
           $staff_fin += intval($v);
        }

          $count = Walk_in::select('walk_in_date_recorded')->where('walk_in_date_recorded', '>',carbon::today())->where('walk_in_date_recorded', '<',carbon::today()->addMinutes(1438))->count() + 1;

        // insert appointment

          Walk_in::insert([
                 'patient_id' =>$patientid,
                 'staff_id' =>$staff_fin,
                 'doctor_id' =>$request->doctor,
                 'walk_in_level_emergency' =>$request->lvlemergency,
                 'walk_in_no' =>Carbon::now()->toDateString() . '-' .  'WK'   . '-' . $count,
                 'walk_in_reason'=>$request->reason,
                 'walk_in_date_recorded'=>Carbon::now(),
                 'walk_in_status' =>0
                     ]);

            return redirect()->back(); 


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
