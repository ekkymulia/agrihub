<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Test User Gratis',
                'email' => 'gratis@gmail.com',
                'password' => bcrypt('12345678'),
                'profile_pict' => 'default.jpg',
                'role_id' => 1,
            ],
            [
                'name' => 'Test User Bayar',
                'email' => 'bayar@gmail.com',
                'password' => bcrypt('12345678'),
                'profile_pict' => 'default.jpg',
                'role_id' => 2,
            ],
        ];

        foreach($data as $dt){
            User::insert($dt);
        }
    }
}
