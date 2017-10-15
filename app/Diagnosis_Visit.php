<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosis_Visit extends Model
{
    protected $table = 'tbl_diagnosis_visit';
    protected $fillable=['visit_id', 'diagnosis_id', 'diagnosis_visit_remarks'];
    protected $primaryKey='diagnosis_visit_id ';
    public $timestamps=false;
}
