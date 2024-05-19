<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $fillable = ['name', 'genre', 'country', 'founding_year', 'description'];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
