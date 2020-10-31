<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'avatar', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getAvatarAttribute($value)
    {
        return asset($value ? 'storage/' . $value : 'images/default-avatar.jpeg');
    }

    public function profilePath()
    {
        return route('profile', $this->username);
    }

    public function path($append = "")
    {
        $path = $this->profilePath();

        return $append ? "{$path}/{$append}" : $path;
    }

    /**
     * Change key in URL in order to get user from id -> name
     */
    public function getRouteKeyName()
    {
        return 'username';
    }
}
