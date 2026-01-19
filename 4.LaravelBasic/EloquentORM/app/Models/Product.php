<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $fillable=[
        'user_id',
        'category_id',
        'name',
        'price'
    ];

    function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    function categories(){
        return $this->belongsTo(Cateagory::class,'category_id');
    }
}
