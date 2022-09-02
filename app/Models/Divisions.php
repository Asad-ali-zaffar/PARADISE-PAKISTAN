<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisions extends Model
{
    use HasFactory;
    protected $table="tbl_divisions";
    protected $primarykey="division_id";

    public function city()
    {
        $this->hasMany('App\Models\City','division_cityID','city_id');
    }
    public function tour_guider()
    {
        $this->hasMany('App\Models\GuiderRegistrationModel','division_tour_guiderID','guider_id');
    }
    public function tour_point()
    {
        $this->hasMany('App\Models\TourPoint','division_tour_pointID','tour_point_id');
    }
    public function transport()
    {
        $this->hasMany('App\Models\Transport','division_transportID','transport_book_ID');
    }
    public function hotel()
    {
        $this->hasMany('App\Models\Tbl_Hotel','division_hotelID','hotel_id');
    }
    public function local_room()
    {
        $this->hasMany('App\Models\Tbl_Local_rooms','division_local_roomID','room_id');
    }
    public function health_care_center()
    {
        $this->hasMany('App\Models\HealthCareCenter','division_health_care_centerID','care_center_Id');
    }

}
