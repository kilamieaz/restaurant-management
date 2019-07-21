<?php

namespace App;

use App\Enums\UserRole;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    protected $with = ['role'];

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

    public function scopeEmployees($query)
    {
        return $query->where('role_id', 'not like', UserRole::Member)->get();
    }

    public function scopeMember($query)
    {
        return $query->where('role_id', UserRole::Member)->get();
    }

    public function scopeSearchMember($query, $search)
    {
        return $query->select('id', 'name', 'email','role_id')->where([['role_id', UserRole::Member], ['email', 'LIKE', "%$search%"]])->get();
    }
}
