<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourPoint extends Model
{
    use HasFactory;
    protected $table="tbl_tour_points";
    protected $primarykey="tour_point_id";

    
}
