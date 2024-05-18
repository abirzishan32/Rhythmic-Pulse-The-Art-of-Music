<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //Accessors to check if the user has an avatar. If not, assign a placeholder avatar
    public function getAvatarAttribute($value){
        return $value ? '/storage/avatars/' . $value : 'user.jpeg';
    }

    public function posts(){
        return $this->hasMany(Post::class, 'user_id');
    }

    public function followers() {
        return $this->hasMany(Follow::class, 'followeduser');
    }

    public function followingTheseUsers() {
        return $this->hasMany(Follow::class, 'user_id');
    }

    public function group()
    {
        return $this->belongsToMany('App\Models\Group', 'admin_id');
    }

    public function group_member()
    {
        return $this->belongsToMany('App\Models\Group', 'group_participants', 'user_id', 'group_id')->orderBy('updated_at', 'desc');
    }

    public function message()
    {
        return $this->hasMany('App\Models\Message', 'user_id');
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class)->withTimestamps();
    }
}
