<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\MedicineStored;
use App\Staff;
use App\User;
use Carbon\Carbon;
use Redirect;
use Illuminate\Support\Facades\Auth;

class MedicineStoredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medicine = DB::table('tbl_medicine')->select('medicine_id','staff_id','medicine_generic_name','medicine_branded_name','medicine_packaging','medicine_dosage','medicine_precautions', 'medicine_date_added', 'medicine_active')->paginate(15000);
/*
        $medicinestored = DB::table('tbl_medicine_stored')->select('medicine_stored_id','staff_id','medicine_id','medicine_stored_qty','medicine_received_date','medicine_expiry_date')->paginate(15000); */

        return view('layouts.staff.setup_medicine_stored', compact('medicine'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.staff.setup_medicine_stored');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storemed(Request $request, $id)
    {
        //

        $user = Auth::id();
          $staffid = DB::table('tbl_staff')->join('users', 'users.id', '=', 'tbl_staff.users_id')->select('tbl_staff.staff_id')->where('users.id', '=', $user)->first();

        $staff_fin = 0;
        
        foreach ((array)$staffid as $v) {
           $staff_fin += intval($v);
        }


                $count = MedicineStored::count() + 1;
      MedicineStored::insert([
            'medicine_id' => $id,
            'staff_id' => $staff_fin,
            'medicine_stored_no' => Carbon::now()->toDateString(). '-' . 'INV' . '-' . $id. '-' . $count,
            'medicine_stored_qty' => $request->quantity,
            'medicine_received_date' => $request->medicine_received,
            'medicine_expiry_date' => $request->medicine_expiry
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