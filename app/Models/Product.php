<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'merch_product';
    protected $fillable = ['band_name', 'type', 'price', 'image', 'recommended'];


    use HasFactory;

}
