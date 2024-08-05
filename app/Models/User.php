<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['user','status','rol','active'];

    const UPDATED_AT = null;

    protected $casts = [
        'rol' => 'array'
    ];
}
