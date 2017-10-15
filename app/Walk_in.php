<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Walk_in extends Model
{
    protected $table = 't_walk_in_request';
    protected $fillable=['patient_id','staff_id', 'doctor_id','walk_in_level_emergency','walk_in_no', 'walk_in_reason','walk_in_status'];
    protected $dates = ['walk_in_date_recorded'];
    protected $primaryKey='walk_in_id';
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
