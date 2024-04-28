<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'ticket_list';
    protected $fillable = ['email', 'contact', 'number', 'event_name'];
    use HasFactory;
}
