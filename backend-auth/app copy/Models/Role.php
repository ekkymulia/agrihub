<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table='roles';

    protected $fillable = [
        'role_name',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }

    // Setiap ngebuat model, jangan lupa bikin migrationnya
    // Setiap ngebuat model jangan lupa define $table, $fillable, dan relasinya
}
