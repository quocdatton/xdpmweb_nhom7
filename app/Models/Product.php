<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey= 'id';
    protected $guarded = [];
    //protected $fillable = ['id', 'brand_id', 'name', 'description', 'content', 'price', 'qty', 'created_at', 'updated_at'];
}
