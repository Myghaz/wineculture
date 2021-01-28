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
        Vinhosimg::create([#12
            'id_vinho' => 5,
            'img' => '5.jpg',
        ]);
        Vinhosimg::create([#13
            'id_vinho' => 6,
            'img' => '6.jpg',
        ]);
        Vinhosimg::create([#14
            'id_vinho' => 7,
            'img' => '7.jpg',
        ]);
        Vinhosimg::create([#15
            'id_vinho' => 8,
            'img' => '8.jpg',
        ]);
        Vinhosimg::create([#16
            'id_vinho' => 9,
            'img' => '9.jpg',
        ]);
        Vinhosimg::create([#17
            'id_vinho' => 10,
            'img' => '10.jpg',
        ]);
        Vinhosimg::create([#18
            'id_vinho' => 11,
            'img' => '11.jpg',
        ]);
    }
}
