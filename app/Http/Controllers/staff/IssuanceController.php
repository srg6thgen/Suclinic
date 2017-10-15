<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Employee;
use App\Student;
use App\Patient;
use App\Issuance;
use App\Issuance_Val;
use DB;
use Illuminate\Support\Facades\Auth;
use Redirect;
class IssuanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    $patient = DB::table('tbl_patient')->join('users', 'tbl_patient.users_id', '=', 'id')->select('tbl_patient.patient_id','tbl_patient.patient_account_no','users.first_name','users.last_name','users.gender','users.middle_name')->paginate(15000);
        return view('layouts.staff.t_medicine_issuance',compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.staff.t_medicine_issuance');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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


       public function IssuanceList($patient_id)
    {   
        //

        $patient = DB::table('tbl_patient')->join('users', 'users.id', '=', 'tbl_patient.users_id')->select('users.first_name','users.last_name')->where('tbl_patient.patient_id', '=', $patient_id)->first();


        $Issuance = DB::table('t_medicine_issuance')->join('tbl_patient', 'tbl_patient.patient_id', '=', 't_medicine_issuance.patient_id')->join('users', 'tbl_patient.users_id', '=', 'users.id')->select('tbl_patient.patient_id','tbl_patient.patient_account_no','users.first_name','users.last_name','t_medicine_issuance.medicine_issuance_id','t_medicine_issuance.medicine_issuance_no','t_medicine_issuance.medicine_issued_date')->where('t_medicine_issuance.patient_id',$patient_id)->paginate(15000);
                return view('layouts.staff.t_medicine_issuance_list',compact('Issuance','patient','patient_id'));
    }


       public function Newissuepatient($patient_id)
    {   

         $user = Auth::id();
        $staffid = DB::table('tbl_staff')->join('users', 'users.id', '=', 'tbl_staff.users_id')->select('tbl_staff.staff_id')->where('users.id', '=', $user)->first();


        $staff_fin =0;
        
        foreach ((array)$staffid as $v) {
        
           $staff_fin += intval($v);
        }

        $count = Issuance::count() + 1;
        
       $Issuance=  Issuance::insertGetId([
         'staff_id' => $staff_fin,
         'patient_id' => $patient_id,
         'medicine_issued_date' => Carbon::now(),
         'medicine_issuance_no' => Carbon::now()->toDateString(). '-' . 'IS' . '-' . $patient_id. '-' . $count,
         'medicine_issuance_status' => 1

            ]);


                 return $this->IssueMedsView($Issuance, $patient_id);

                   
    }


           public function IssueMedsView($Issuance, $patient_id)
    {   
        $issuemedvalue = DB::table('t_medicine_issuance_value')->join('tbl_medicine_stored', 'tbl_medicine_stored.medicine_stored_id', '=', 't_medicine_issuance_value.medicine_stored_id')->join('tbl_medicine', 'tbl_medicine.medicine_id', '=', 'tbl_medicine_stored.medicine_id')->join('t_medicine_issuance', 't_medicine_issuance.medicine_issuance_id', '=', 't_medicine_issuance_value.medicine_issuance_id')->select('tbl_medicine_stored.medicine_stored_no','tbl_medicine.medicine_branded_name','t_medicine_issuance_value.medicine_issuance_value_qty')->where('t_medicine_issuance_value.medicine_issuance_id', $Issuance)->paginate(1500);
     
        $stocked_near_expired = DB::table('tbl_medicine_stored')->join('tbl_medicine', 'tbl_medicine_stored.medicine_id', '=', 'tbl_medicine.medicine_id')->select('tbl_medicine_stored.medicine_stored_id','tbl_medicine.medicine_branded_name','tbl_medicine_stored.medicine_stored_qty','tbl_medicine_stored.medicine_expiry_date')->where('tbl_medicine_stored.medicine_expiry_date','>', Carbon::now())->where('tbl_medicine_stored.medicine_expiry_date','<', Carbon::now()->addDays(30))->where('tbl_medicine_stored.medicine_stored_qty','>', 0)->get();


           $stocked_medicine = DB::table('tbl_medicine_stored')->join('tbl_medicine', 'tbl_medicine_stored.medicine_id', '=', 'tbl_medicine.medicine_id')->select('tbl_medicine_stored.medicine_stored_id','tbl_medicine.medicine_branded_name','tbl_medicine_stored.medicine_stored_qty','tbl_medicine_stored.medicine_expiry_date')->where('tbl_medicine_stored.medicine_expiry_date','>', Carbon::now()->addDays(30))->where('tbl_medicine_stored.medicine_stored_qty','>', 0)->get();




                      return view('layouts.staff.t_medicine_issuance_list_value',compact('Issuance_Val','issuemedvalue','stocked_near_expired','stocked_medicine','patient_id','Issuance'));
                   
    }





           public function Issuemedicine(Request $request, $Issuance, $patient_id)
    {       


     $newquantityfirst =  DB::table('tbl_medicine_stored')->select('medicine_stored_qty')->where('medicine_stored_id', '=', $request->medstock)->first();


               $newquantity =0;
        
        foreach ((array)$newquantityfirst as $v) {
        
           $newquantity += intval($v);
        
         }
             $newquantitylast=0;
             $newquantitylast = ($newquantity - $request->quantity);

             if($newquantitylast > 0)
             {
        Issuance_Val::insert([
         'medicine_issuance_id' => $Issuance,
         'medicine_stored_id' => $request->medstock,
         'medicine_issuance_value_qty' => $request->quantity,

            ]);

              DB::table('tbl_medicine_stored')
            ->where('medicine_stored_id', $request->medstock)
            ->update(['medicine_stored_qty' => $newquantitylast]);


          
                 return $this->IssueMedsView($Issuance, $patient_id);

             }
             else
    
                return $this->IssueMedsView($Issuance, $patient_id)->withErrors(['quantity exceed']);
                   
    }


    public function invoice_issuance($Issuance, $patient_id)
    {

           $user = Auth::id();
        $staff = DB::table('tbl_staff')->join('users', 'users.id', '=', 'tbl_staff.users_id')->select('tbl_staff.staff_id', 'users.first_name','users.last_name')->where('users.id', $user)->first();





           $issuemedvalue = DB::table('t_medicine_issuance_value')->join('tbl_medicine_stored', 'tbl_medicine_stored.medicine_stored_id', '=', 't_medicine_issuance_value.medicine_stored_id')->join('tbl_medicine', 'tbl_medicine.medicine_id', '=', 'tbl_medicine_stored.medicine_id')->join('t_medicine_issuance', 't_medicine_issuance.medicine_issuance_id', '=', 't_medicine_issuance_value.medicine_issuance_id')->select('tbl_medicine_stored.medicine_stored_no','tbl_medicine.medicine_branded_name','t_medicine_issuance_value.medicine_issuance_value_qty')->where('t_medicine_issuance_value.medicine_issuance_id', $Issuance)->paginate(1500);

            $patient = DB::table('tbl_patient')->join('users as up', 'tbl_patient.users_id', '=', 'up.id')->select('up.first_name as patient_first','up.last_name as patient_last')->where('tbl_patient.patient_id',$patient_id)->first();




        return view('layouts.staff.invoice-issuance',compact('issuemedvalue','patient','staff'));

    }


}