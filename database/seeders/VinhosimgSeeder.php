<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vinhosimg;

class VinhosimgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vinhosimg::create([
            'id_vinho' => 1,
            'img' => '1.jpg',
        ]);
        Vinhosimg::create([
            'id_vinho' => 1,
            'img' => '1-1.jpg',
        ]);
        Vinhosimg::create([
            'id_vinho' => 1,
            'img' => '1-2.jpg',
        ]);
        Vinhosimg::create([
            'id_vinho' => 2,
            'img' => '2.jpg',
        ]);
        Vinhosimg::create([
            'id_vinho' => 2,
            'img' => '2-1.jpg',
        ]);
        Vinhosimg::create([
            'id_vinho' => 3,
            'img' => '3.jpg',
        ]);
        Vinhosimg::create([
            'id_vinho' => 3,
            'img' => '3-1.jpg',
        ]);
        Vinhosimg::create([
            'id_vinho' => 3,
            'img' => '3-2.jpg',
        ]);
        Vinhosimg::create([
            'id_vinho' => 4,
            'img' => '4.jpg',
        ]);
        Vinhosimg::create([
            'id_vinho' => 4,
            'img' => '4-1.jpg',
        ]);
        Vinhosimg::create([
            'id_vinho' => 4,
            'img' => '4-2.jpg',
        ]);
    }
}
