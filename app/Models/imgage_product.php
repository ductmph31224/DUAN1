<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imgage_product extends Model
{
    use HasFactory;
    protected $fillable =[
        'product_id',
        'image',
    ];
    public function sanPham(){
        return $this->belongsTo(Product::class);
    }
}
