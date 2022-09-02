<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_visitor_reviews extends Model
{
    use HasFactory;
    protected $table="tbl_visitor_reviews";
    protected   $primarykey="review_id";
}
