<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Model;

class drivers extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'matricule',
        'role',
        'username',
        'password',
    ];
}
