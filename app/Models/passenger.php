<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class passenger extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'last_name',
        'phone',
        'email',
        'role',
        'username',
        'password',
    ];
}
