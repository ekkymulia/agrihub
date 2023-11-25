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
                'nama' => 'Naufal Ardhani',
                'username' => 'naufalardhani',
                'no_hp' => '081267644410',
                'alamat' => 'Ciremai Ujung',
                'email' => 'naufal@gmail.com',
                'password' => bcrypt('123456'),
                'terverifikasi' => 1,
                'role_id' => 1,
            ],
            [
                'nama' => 'Ekky Mulia',
                'username' => 'ekkymulia',
                'no_hp' => '0812371293',
                'alamat' => 'Depok Ujung',
                'email' => 'ekky@gmail.com',
                'password' => bcrypt('123456'),
                'terverifikasi' => 1,
                'role_id' => 3,
            ],
        ];

        foreach($data as $dt){
            User::insert($dt);
        }
    }
}
