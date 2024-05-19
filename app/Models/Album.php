<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['title', 'band_id', 'release_date'];

    public function band()
    {
        return $this->belongsTo(Band::class);
    }

}
