<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'tbl_staff';
    protected $fillable=['users_id'];
    protected $primaryKey='staff_id';
    public $timestamps=false;

       public function users()
    {
        return $this->hasOne('App\User','users_id','users_id');

    }
}
