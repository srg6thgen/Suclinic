<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issuance_Val extends Model
{
    protected $table = 't_medicine_issuance_value';
    protected $fillable=['medicine_issuance_id', 'medicine_stored_id','medicine_issuance_value_qty'];
    protected $primaryKey='medicine_issuance_value_id';
    public $timestamps=false;
}
