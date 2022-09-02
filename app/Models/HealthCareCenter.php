<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthCareCenter extends Model
{
    use HasFactory;
    protected $table="tbl_health_care_center";
    protected $primarykey="care_center_Id";

    public function city()
    {
        $this->hasMany('App\Models\City','health_care_center_cityID','city_id');
    }
}
