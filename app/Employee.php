<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'tbl_employee';
    protected $fillable=['employee_id', 'employee_number', 'employee_firstname', 'employee_middlename', 'employee_lastname','employee_gender', 'employee_email', 'employee_address', 'employee_city','employee_zip_code','employee_birthdate','employee_reg_date','employee_position', 'employee_active'];
    protected $primaryKey='employee_id';
    public $timestamps=false;

    public function patient()
    {
    	return $this->hasOne('App\Patient','employee_id','employee_id');
    }
}

class AppointmentType extends Model
{
    protected $table = 'tbl_appointment_type';
    protected $fillable=['appointment_type_title','appointment_type_description', 'appointment_type_duration'];
    protected $primaryKey='appointment_type_id';
    public $timestamps=false;

    public function patient()
    {
    	return $this->hasOne('App\Patient','employee_id','employee_id');
    }
}
