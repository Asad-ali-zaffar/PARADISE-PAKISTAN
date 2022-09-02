<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_Hotel extends Model
{
    use HasFactory;
    protected $table='tbl__hotels';
    protected $primarykey='hotel_id';
}
