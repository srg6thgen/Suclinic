<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issuance extends Model
{
    protected $table = 't_medicine_issuance';
    protected $fillable=['staff_id', 'patient_id','medicine_issued_date','medicine_issuance_no','medicine_issuance_status'];
    protected $primaryKey='medicine_issuance_id ';
    public $timestamps=false;
}
