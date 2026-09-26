<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Attributes\Fillable;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'description', 'uid', 'user_id'])]
class Product extends Model
{

    protected $fillable = [
        'name',
        'description',
        'uid',
        'user_id'
    ];
}
