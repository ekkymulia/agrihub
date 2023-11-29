<?php

namespace Database\Seeders;

use App\Models\TipeAkun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeAkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Gratis',
            ],
            [
                'nama' => 'Berbayar',
            ],
        ];

        foreach($data as $dt){
            TipeAkun::insert($dt);
        }
    }
}
