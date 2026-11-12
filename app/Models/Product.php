<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Attributes\Fillable;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\UsePolicy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Policies\ProductPolicy;

#[Fillable(['name', 'description', 'uid', 'user_id'])]
// #[UsePolicy(ProductPolicy::class)]

class Product extends Model
{
    use HasFactory;
// Car
    protected $fillable = [
        'name',
        'description',
        'uid',
        'user_id'
    ];

    // public function users()
    // {
    //     return $this->belongsToMany(User::class, 'orders');
    // }

    // public function favorites()
    // {
    //     return $this->belongsToMany(User::class, 'favorites');
    // }


    
    public function users(){
        return $this->belongsToMany(User::class,'orders');

    }
}
