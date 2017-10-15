<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineStored extends Model
{
    protected $table = 'tbl_medicine_stored';
    protected $fillable = ['medicine_id', 'staff_id', 'medicine_stored_qty', 'medicine_received_date', 'medicine_expiry_date'];
    protected $primaryKey='medicine_stored_id';
    public $timestamps=false;

    public function staff()
    {
        return $this->hasOne('App\Staff','staff_id','staff_id');
    }

    public function medicine()
    {
        return $this->hasOne('App\Medicine','medicine_id','medicine_id');
    }
}