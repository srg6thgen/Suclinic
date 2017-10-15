<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Employee;
use App\Student;
use App\Patient;
use App\Appointment;
use App\Diagnosis;
use App\Diagnosis_Visit;
use App\Medicine;
use App\Visit;
use App\Prescription;
use App\Walk_in;
use DB;
use Illuminate\Support\Facades\Auth;

class visitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id,$appointment_id,$walk_in_id)
    {
        //
        $patient = DB::table('tbl_patient')->join('users as up', 'tbl_patient.users_id', '=', 'up.id')->select('up.first_name as patient_first','up.last_name as patient_last')->where('tbl_patient.patient_id',$id)->first();




         $vitals = DB::table('t_vitals')->join('tbl_patient', 'tbl_patient.patient_id', '=', 't_vitals.patient_id')->join('tbl_staff', 'tbl_staff.staff_id', '=', 't_vitals.staff_id')->select('t_vitals.patient_id','t_vitals.vitals_patient_weight_kilos','t_vitals.vitals_patient_height_cm','t_vitals.vitals_patient_bpsystoli','vitals_patient_diastolic','vitals_patient_temp_celsius','t_vitals.vitals_patient_respiration_rate_min','t_vitals.vitals_patient_pulse_rate_min','t_vitals.vitals_patient_heart_rate_min','t_vitals.vitals_date_time')->where('t_vitals.patient_id',$id) ->orderBy('vitals_date_time', 'desc')->paginate(15000);


        $phistoryapp = DB::table('t_visit')->join('t_appointment', 't_appointment.appointment_id', '=', 't_visit.appointment_id')->join('tbl_patient', 'tbl_patient.patient_id', '=', 't_appointment.patient_id')->select('visit_date_time','visit_patient_symptomps','visit_remarks','visit_status')->where('t_appointment.patient_id',$id) ->orderBy('visit_date_time', 'desc')->paginate(15000);





        $phistorywalk = DB::table('t_visit')->join('t_walk_in_request', 't_walk_in_request.walk_in_id', '=', 't_visit.walk_in_id')->join('tbl_patient', 'tbl_patient.patient_id', '=', 't_walk_in_request.patient_id')->select('visit_date_time','visit_patient_symptomps','visit_remarks','visit_status')->where('t_walk_in_request.patient_id',$id) ->orderBy('visit_date_time', 'desc')->paginate(15000);
       
       
       
     
         return view('layouts.doctor.doctor_visit_patient', compact('vitals','patient', 'appointment_id','walk_in_id','phistoryapp','phistorywalk'),['diagnosis'=>Diagnosis::pluck('diagnosis_name','diagnosis_id'), 'medicine'=>Medicine::pluck('medicine_branded_name','medicine_id')]);
    /*     dd($id,$appointment_id,$walk_in_id);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //

      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeappointment(Request $request,$appointment_id,$walk_in_id)
    {
        //
          $visitkek=0;

        if($walk_in_id < 1)

        {
            $Visitid= Visit::insertGetId([

            'appointment_id' => $appointment_id,
            'visit_date_time'=>Carbon::now(),     
            'visit_patient_symptomps' => $request->visit_patient_symptomps,
            'visit_remarks' => $request->visit_remarks,
            'visit_status' => 1

        ]);
             $visitkek = $Visitid;

               DB::table('t_appointment')
            ->where('appointment_id', $appointment_id)
            ->update(['appointment_status_done' => 1]);
      }
      else if($walk_in_id > 0){

               $Visitid= Visit::insertGetId([

        'walk_in_id' => $walk_in_id,
        'visit_date_time'=>Carbon::now(),     
        'visit_patient_symptomps' => $request->visit_patient_symptomps,
        'visit_remarks' => $request->visit_remarks,
        'visit_status' => 1

        ]);

               $visitkek = $Visitid;

                  DB::table('t_walk_in_request')
            ->where('walk_in_id', $walk_in_id)
            ->update(['walk_in_status' => 1]);

      }

        $did = $request->diagnosis;
        $did = implode(',', $did);
        $input = $request->except('did');
        $input['did'] = $did;


            $countres = count($request->diagnosis);
            $i=0;
           
            $j=0;
        for ($i = 1; $i <=$countres; $i++) {
         

         Diagnosis_Visit::insert([

        'visit_id' => $Visitid,
        'diagnosis_id'=>$did[$j]    

        ]);

            $j=$j+2;

        }

//medicine prescription
            $medid = $request->medicine;
        $medid = implode(',', $medid);
        $input = $request->except('medid');
        $input['medid'] = $medid;


        $countres1 = count($request->medicine);
 
            $k=0;
        for ($i = 1; $i <=$countres1; $i++) {
         

         Prescription::insert([

        'visit_id' => $Visitid,
        'medicine_id'=>$medid[$k]    

        ]);

            $k=$k+2;

        }


       /*   return redirect()->route('invoice'); */
               
    /*   return redirect()->action('UserController@profile');*/
      /*  return redirect()->route('invoice', ['visitkek' =>$visitkek]);*/

       if($walk_in_id < 1){
        return response()->redirectToAction('doctor\visitController@invoice_visit', [$visitkek]);
        }


        else if($walk_in_id > 0){

          return response()->redirectToAction('doctor\visitController@invoice_visit_walk', [$visitkek]);

      }

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


        public function storediagnosis(Request $request)
          {
             Diagnosis::insert([

        'diagnosis_name' =>  $request->diagnosis_name,
        'diagnosis_description' => $request->diagnosis_description

        ]);

              return redirect()->back();
       
    }

       public function storemedicine(Request $request)
          {
        Medicine::insert([
        'medicine_generic_name' => $request->generic_name,
        'medicine_branded_name' => $request->branded_name,
        'medicine_packaging' => $request->medicine_packaging,
        'medicine_precautions' => $request->medicine_precautions,
        'medicine_company_brand' => $request->medicine_branded,
        'medicine_dosage' => $request->medicine_dosage,
        'medicine_date_added' => Carbon::now(),
        'medicine_active' => 1

        ]);

              return redirect()->back();
       
    }



    public function invoice_visit($visitkek)
    {
        $user = Auth::id();
        $doctorfirst = DB::table('tbl_doctor')->join('users', 'users.id', '=', 'tbl_doctor.users_id')->select('tbl_doctor.doctor_id')->where('users.id', '=', $user)->first();


        $doctor =0;
        
        foreach ((array)$doctorfirst as $v) {
        
           $doctor += intval($v);
        
         }     


         $medicine = DB::table('tbl_prescription')->join('tbl_medicine', 'tbl_medicine.medicine_id', '=', 'tbl_prescription.medicine_id')->select('tbl_prescription.prescription_id','tbl_medicine.medicine_branded_name','tbl_medicine.medicine_dosage','tbl_medicine.medicine_generic_name')->where('tbl_prescription.visit_id', $visitkek)->get();

        $visit = DB::table('t_visit')->join('t_appointment', 't_appointment.appointment_id', '=', 't_visit.appointment_id')->join('tbl_doctor', 'tbl_doctor.doctor_id', '=', 't_appointment.doctor_id')->join('users as ud', 'tbl_doctor.users_id', '=', 'ud.id')->join('tbl_patient', 'tbl_patient.patient_id', '=', 't_appointment.patient_id')->join('users as up', 'tbl_patient.users_id', '=', 'up.id')->select('visit_date_time','visit_patient_symptomps','visit_remarks','visit_status','ud.first_name as first_name_doctor','ud.last_name as last_name_doctor','up.first_name as first_name_patient','up.last_name as last_name_patient','t_appointment.appointment_reason as reason')->where('t_visit.visit_id',$visitkek)->first();



        return view('layouts.doctor.invoice-visit',compact('visit','medicine'));
 
    }




        public function invoice_visit_walk($visitkek)
    {
        $user = Auth::id();
        $doctorfirst = DB::table('tbl_doctor')->join('users', 'users.id', '=', 'tbl_doctor.users_id')->select('tbl_doctor.doctor_id')->where('users.id', '=', $user)->first();


        $doctor =0;
        
        foreach ((array)$doctorfirst as $v) {
        
           $doctor += intval($v);
        
         }     


         $medicine = DB::table('tbl_prescription')->join('tbl_medicine', 'tbl_medicine.medicine_id', '=', 'tbl_prescription.medicine_id')->select('tbl_prescription.prescription_id','tbl_medicine.medicine_branded_name','tbl_medicine.medicine_dosage','tbl_medicine.medicine_generic_name')->where('tbl_prescription.visit_id', $visitkek)->get();

        $visit = DB::table('t_visit')->join('t_walk_in_request', 't_walk_in_request.walk_in_id', '=', 't_visit.walk_in_id')->join('tbl_doctor', 'tbl_doctor.doctor_id', '=', 't_walk_in_request.doctor_id')->join('users as ud', 'tbl_doctor.users_id', '=', 'ud.id')->join('tbl_patient', 'tbl_patient.patient_id', '=', 't_walk_in_request.patient_id')->join('users as up', 'tbl_patient.users_id', '=', 'up.id')->select('visit_date_time','visit_patient_symptomps','visit_remarks','visit_status','ud.first_name as first_name_doctor','ud.last_name as last_name_doctor','up.first_name as first_name_patient','up.last_name as last_name_patient','t_walk_in_request.walk_in_reason as reason')->where('t_visit.visit_id',$visitkek)->first();



        return view('layouts.doctor.invoice-visit',compact('visit','medicine'));
         }

}
