<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname','middlename', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userlogs(){
        return $this->hasMany(UserLog::class,'user_id');
    }

    public function fertilizers(){
        return $this->hasMany(Fertilizer::class);
    }

    public function garbages(){
        return $this->hasMany(Garbage::class);
    }

    public function jobs(){
        return $this->hasMany(Job::class);
    }
}
