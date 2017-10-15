<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Staff;
use App\Patient;
use App\Vitals;
use Redirect;
use Carbon\Carbon;
class vitalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $patient = DB::table('tbl_patient')->join('users', 'tbl_patient.users_id', '=', 'id')->select('patient_id','tbl_patient.patient_id','tbl_patient.patient_account_no','users.first_name','users.last_name','users.gender','users.middle_name')->paginate(15000);
           return view('layouts.staff.t_vitals',compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.staff.setup_room');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storevitals(Request $request, $id)
    {
        $user = Auth::id();
        $staffid = DB::table('tbl_staff')->join('users', 'users.id', '=', 'tbl_staff.users_id')->select('tbl_staff.staff_id')->where('users.id', '=', $user)->first();


        $staff_fin =0;
        
        foreach ((array)$staffid as $v) {
        
           $staff_fin += intval($v);
        
         }     
        Vitals::insert([

        'staff_id' => $staff_fin,
        'patient_id' => $id,
        'vitals_patient_weight_kilos' => $request->Weight,
        'vitals_patient_height_cm' => $request->Height,
        'vitals_patient_bpsystoli' => $request->Systolic,
        'vitals_patient_diastolic' => $request->Diastolic,
        'vitals_patient_temp_celsius' => $request->Temp,
        'vitals_patient_pulse_rate_min' => $request->Pulse,
        'vitals_patient_heart_rate_min' => $request->Heart,
        'vitals_patient_respiration_rate_min'=> $request->Respiration,
        'vitals_date_time' => Carbon::now()

            ]);

                  return redirect()->route('ManageVitals.index'); 
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