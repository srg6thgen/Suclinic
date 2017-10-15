<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use DB;
use App\UtilityStored;
use App\Staff;
use App\User;
use App\Utility;
use Redirect;

class UtilityStoredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ustored = DB::table('tbl_utility')->select('utility_id','staff_id','utility_number','utility_name','utility_issued_date','utility_description','utility_active')->paginate(15000);

        $utilitystored = DB::table('tbl_utility_stored')->select('utility_stored_id','utility_id','staff_id','utility_stored_code_number','utility_stored_received_date','utility_stored_remarks','utility_stored_status')->paginate(15000);

        return view('layouts.staff.setup_utility_stored', compact('ustored', 'utilitystored'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.staff.setup_utility_stored');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        $mytime = Carbon::now();
        $staff_user = Auth::id();
        $staffid = DB::table('tbl_staff')->join('users', 'users.id', '=', 'tbl_staff.users_id')->select('tbl_staff.staff_id')->where('users.id', '=', $staff_user)->first();

        $staff_fin = 0;
        
        foreach ((array)$staffid as $v) {
           $staff_fin += intval($v);
        }
 
      UtilityStored::insert([
        'utility_id' => $id,
        'staff_id' => $staff_fin,
        'utility_stored_code_number'=>$request->utility_stored_code_number,     
        'utility_stored_received_date' => $mytime,
        'utility_stored_remarks' => "good",
        'utility_stored_status' => 1
        ]);
        return redirect()->route('ManageUtilityStored.index');
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