<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

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

    public function role()
    {
        // return $this->belongsTo(Role::class, 'role_id');
        return $this->belongsTo(Role::class);
    }

    public function authorizeRole($role)
    {
        if (is_array($role)) {
            return $this->hasAnyRole($role) || null;
        }
        return $this->hasRole($role) || null;
    }

    /**
    * Check multiple role
    * @param array $role
    */
    public function hasAnyRole($role)
    {
        return null !== $this->role()->whereIn('name', $role)->first();
    }

    /**
    * Check one role
    * @param string $role
    */
    public function hasRole($role)
    {
        return null !== $this->role()->where('name', $role)->first();
    }
}
