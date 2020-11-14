<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'contact',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
      return $this->belongsToMany('App\Models\Role');
    }

    public function hasAnyRole(array $roles)
    {
      return $this->roles()->whereIn('name', $roles)->first();
    }

    //vérifie si l'utilisateur est admin
    public function isAdmin()
    {
      return $this->roles()->where('name', 'admin')->first();
    }

    public function accounts()
    {
        return $this->hasOne('App\Models\Account');
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}
