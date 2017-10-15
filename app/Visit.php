<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $table = 't_visit';
    protected $fillable = ['appointment_id', 'walk_in_id', 'visit_patient_symptoms', 'visit_status'];
    protected $dates = ['visit_date_time'];
    protected $primaryKey='visit_id';
    public $timestamps=false;

    public function walk_in()
    {
        return $this->hasOne('App\Walk_in','walk_in_id','walk_in_id');
    }

    public function appointment()
    {
        return $this->hasOne('App\Appointment','appointment_id','appointment_id');
    }
}