<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 't_appointment';
    protected $fillable=['appointment_type_title','patient_id','staff_id', 'doctor_id','appointment_type_id','appointment_no', 'appointment_reason','appointment_cancel_reason','appointment_status', 'appointment_status_done'];
    protected $dates = ['appointment_datetime_started','appointment_datetime_ended','appointment_date_recorded'];
    protected $primaryKey='appointment_id';
    public $timestamps=false;

    public function patient()
    {
    	return $this->hasOne('App\Patient','patient_id','patient_id');
    }
       public function staff()
    {
    	return $this->hasOne('App\Staff','staff_id','staff_id');
    }
       public function doctor()
    {
    	return $this->hasOne('App\Doctor','doctor_id','doctor_id');
    }
}
