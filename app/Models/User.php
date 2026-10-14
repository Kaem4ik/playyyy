<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    protected $fillable = ['login', 'password'];
    protected $hidden = ['password', 'remember_token'];

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}