<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'tbl_student';
    protected $fillable=['student_number', 'student_firstname', 'student_middlename', 'student_lastname', 'student_contact_no', 'student_address', 'student_city','student_zip_code','student_birthdate', 'student_reg_date'];
    protected $primaryKey='student_id';
    public $timestamps=false;

    public function patient()
    {
    	return $this->hasOne('App\Patient','student_id','student_id');
    }
        public function Course()
    {
        return $this->hasMany('App\Course');

    }
}
