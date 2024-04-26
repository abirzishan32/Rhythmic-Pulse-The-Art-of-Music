<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'location', 'event_date', 'event_time', 'description', 'image'];

    protected function events(){
        return $this->hasMany(Event::class);
    }
    
}
