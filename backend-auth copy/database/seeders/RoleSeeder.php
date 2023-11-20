<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'role_name' => 'Gratis',
            ],
            [
                'role_name' => 'Berbayar',
            ],
        ];

        foreach($data as $dt){
            Role::insert($dt);
        }
    }
}
