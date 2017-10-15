<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vitals extends Model
{
    protected $table = 't_vitals';
    protected $fillable = ['staff_id', 'patient_id', 'vitals_patient_weight_kilos', 'vitals_patient_height_cm', 'vitals_patient_bpsystoli','vitals_patient_diastolic','vitals_patient_temp_celsius','vitals_patient_pulse_rate_min'];
    protected $dates = ['vitals_date_time'];
    protected $primaryKey='vitals_id';
    public $timestamps=false;

    public function staff()
    {
        return $this->hasOne('App\Staff','staff_id','staff_id');
    }

    public function patient()
    {
        return $this->hasOne('App\Patient','patient_id','patient_id');
    }
}