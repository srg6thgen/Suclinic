<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'tbl_room';
    protected $fillable=['room_number', 'room_name', 'room_active', 'room_reg_date'];
    protected $primaryKey='room_id';
    public $timestamps=false;

       public function doctor()
    {
        return $this->hasOne('App\Doctor','room_id','room_id');

    }
}
