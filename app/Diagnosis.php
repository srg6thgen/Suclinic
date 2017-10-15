<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    protected $table = 'tbl_diagnosis';
    protected $fillable=['diagnosis_name', 'diagnosis_description'];
    protected $primaryKey='diagnosis_id ';
    public $timestamps=false;
}
