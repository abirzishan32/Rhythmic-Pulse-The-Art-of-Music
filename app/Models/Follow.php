<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $table = 'following_table';
    protected $fillable = ['user_id', 'followeduser'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function followedUser() {
        return $this->belongsTo(User::class, 'followeduser');
    }
}
