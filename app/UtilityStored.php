<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UtilityStored extends Model
{
    protected $table = 'tbl_utility_stored';
    protected $fillable=['utility_id', 'staff_id', 'utility_stored_code_number', 'utility_stored_received_date', 'utility_stored_remarks', 'utility_stored_status'];
    protected $primaryKey='utility_stored_id';
    public $timestamps=false;

    public function staff()
    {
        return $this->hasOne('App\Staff','staff_id','staff_id');
    }

    public function utility()
    {
        return $this->hasOne('App\utility','utility_id','utility_id');
    }
}