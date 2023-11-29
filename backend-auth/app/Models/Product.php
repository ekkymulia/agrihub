<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected  $table = 'products';

    protected $fillable = [
        'nama_product',
        'deskripsi_product',
        'harga_product',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
