<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_images extends Model
{
    use HasFactory;

    protected $table='tbl_images';
    protected $primarykey='image_Id';
}
