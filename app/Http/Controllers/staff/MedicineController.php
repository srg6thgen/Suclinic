<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Medicine;
use App\Staff;
use App\User;
use Redirect;
class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
          $medicine = DB::table('tbl_medicine')->select('medicine_id','staff_id','medicine_generic_name','medicine_branded_name','medicine_packaging','medicine_dosage','medicine_precautions', 'medicine_date_added', 'medicine_active' )->paginate(15000); 
        return view('layouts.staff.setup_medicine', compact('medicine'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.staff.setup_medicine');
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
        $mytime = Carbon::now();
        $user = Auth::id();
        $staffid = DB::table('tbl_staff')->join('users', 'users.id', '=', 'tbl_staff.users_id')->select('tbl_staff.staff_id')->where('users.id', '=', $user)->first();


        $student_fin =0;
        
        foreach ((array)$staffid as $v) {
        
           $student_fin += intval($v);
        
         }     
        /*$staff   = $user->staff;
        $staffId = $staff->id;
        dd($staffId);*/

        $medicine_id = Medicine::insert([
        'staff_id' => $student_fin,
        'medicine_generic_name' => $request->generic_name,
        'medicine_branded_name' => $request->branded_name,
        'medicine_packaging' => $request->medicine_packaging,
        'medicine_precautions' => $request->medicine_precautions,
        'medicine_company_brand' => $request->medicine_branded,
        'medicine_dosage' => $request->medicine_dosage,
        'medicine_date_added' => $mytime,
        'medicine_active' => 1

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
