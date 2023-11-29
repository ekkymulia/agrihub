<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeAkun extends Model
{
    use HasFactory;
    protected $table='tipe_akun';

    protected $fillable = [
        'name',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
}
