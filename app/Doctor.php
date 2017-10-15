<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'tbl_doctor';
    protected $fillable=['users_id', 'room_id'];
    protected $primaryKey='doctor_id';
    public $timestamps=false;

    public function users()
    {
        return $this->hasOne('App\User','users_id','users_id');

    }
    
    public function room()
    {
        return $this->hasOne('App\Room','room_id','room_id');

    }
}
