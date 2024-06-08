<?php

namespace App\Models;

use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use softDeletes;

    protected $fillable = [
        'name',
        'full_address',
        'phone',
        'email',
        'password'
    ];
}
