<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'tbl_student_course';
    protected $fillable=['student_id', 'student_status', 'student_course_name', 'student_course_section', 'student_course_date_added', 'student_course_date_expiry'];
    protected $primaryKey='student_course_id';
    public $timestamps=false;

       public function Student()
    {
        return $this->belongsTo('tbl_student');

    }
}
