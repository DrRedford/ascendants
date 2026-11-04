<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = [
        'name',
        'typing',
        'user_id',
        'level',
        'role',
    ];
}
