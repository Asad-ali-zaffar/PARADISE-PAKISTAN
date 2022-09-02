<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_Room_booking extends Model
{
    use HasFactory;
    protected $tabel="tbl__room_bookings";
    protected $primarykey="room_booking_id";

    // public function localroom()
    // {
    //     return $this->hasMany('App\Models\Tbl_local_rooms','room_id','room_id');
    // }
    // public function hotelroom()
    // {
    //     return $this->hasMany('App\Models\Tbl_Hotel','hotel_id','hotel_id');
    // }
}
