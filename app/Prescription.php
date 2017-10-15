<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $table = 'tbl_prescription';
    protected $fillable=['visit_id', 'medicine_id'];
    protected $primaryKey='prescription_id ';
    public $timestamps=false;
}
