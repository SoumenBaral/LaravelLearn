<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cateagory extends Model
{
    /** @use HasFactory<\Database\Factories\CateagoryFactory> */
    use HasFactory;
    protected $fillable=[
        'name',
        'user_id'
    ];
    function users(){
        return $this->belongsTo(User::class);
    }
    function Products(){
        return $this->hasMany(Product::class);
    }
    
}
