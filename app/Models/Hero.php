<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = [
        'name',
        'primary_type',
        'user_id',
        'level',
        'role',
    ];
}
