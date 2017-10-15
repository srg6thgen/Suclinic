<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'tbl_patient';
    protected $fillable=['patient_account_no', 'patient_reg_date'];
    protected $primaryKey='patient_id';
    public $timestamps=false;

       public function doctor()
    {
        return $this->hasOne('App\Doctor','room_id','room_id');

    }

       public function staff()
    {
        return $this->hasOne('App\Staff','staff_id','staff_id');

    }

       public function users()
    {
        return $this->hasOne('App\User','users_id','users_id');

    }
         public function employee()
    {
        return $this->hasOne('App\Employee','employee_id','employee_id');

    }
         public function student()
    {
        return $this->hasOne('App\Student','student_id','student_id');

    }
}
