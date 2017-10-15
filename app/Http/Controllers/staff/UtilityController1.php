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
use App\Utility;
use Redirect;
class UtilityController1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $utility = DB::table('tbl_utility')->select('utility_id','staff_id','utility_number','utility_name','utility_description','utility_issued_date','utility_active')->paginate(15000); 
        return view('layouts.staff.setup_utility', compact('utility'));
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
    public function store(Request $request)
    {
          $mytime = Carbon::now();
        $user = Auth::id();
        $staffid = DB::table('tbl_staff')->join('users', 'users.id', '=', 'tbl_staff.users_id')->select('tbl_staff.staff_id')->where('users.id', '=', $user)->first();


        $staff_fin =0;
        
        foreach ((array)$staffid as $v) {
        
           $staff_fin += intval($v);
        
         }     

   

      Utility::insert([

        'staff_id' => $staff_fin,
        'utility_number'=>$request->utility_number,     
        'utility_name' => $request->utility_name,
        'utility_description' => $request->utility_description,
        'utility_issued_date' => Carbon::now(),
        'utility_active' => 1

        ]);

        return redirect()->route('ManageUtility.index');
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