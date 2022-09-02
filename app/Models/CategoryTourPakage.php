<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTourPakage extends Model
{
    use HasFactory;
    protected $table="tbl_category_tour_pakeges";
    protected $primarykey="category_pakege_id";

    public function pakages()
    {
        $this->hasMany('App\Models\TourPakages','tour_pakageID','tour_pakage_id');
    }
}

