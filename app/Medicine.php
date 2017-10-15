<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table = 'tbl_medicine';
    protected $fillable=['staff_id', 'medicine_generic_name', 'medicine_branded_name', 'medicine_packaging', 'medicine_precautions', 'medicine_branded', 'medicine_dosage', 'medicine_date_added', 'medicine_active'];
    protected $primaryKey='medicine_id';
    public $timestamps=false;

       public function staff()
    {
        return $this->hasOne('App\Staff','staff_id','staff_id');

    }
}
