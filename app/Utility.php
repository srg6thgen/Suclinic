<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    protected $table = 'tbl_utility';
    protected $fillable=['staff_id','utility_number', 'utility_issued_date', 'utility_description', 'utility_active', 'utility_active'];
    protected $primaryKey='utility_id';
    public $timestamps=false;

       public function staff()
    {
        return $this->hasOne('App\Staff','staff_id','staff_id');

    }
}
