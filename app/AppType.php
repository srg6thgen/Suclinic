<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppType extends Model
{
    protected $table = 'tbl_appointment_type';
    protected $fillable=['appointment_type_title','appointment_type_allowance','appointment_type_description', 'appointment_type_duration'];
    protected $primaryKey='appointment_type_id';
    public $timestamps=false;

    public function patient()
    {
    	return $this->hasOne('App\Patient','employee_id','employee_id');
    }
}
