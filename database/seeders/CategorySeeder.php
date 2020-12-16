<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategotySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'nome' => 'Politica',
        ]);
        Category::create([
            'nome' => '2',
        ]);
        Category::create([
            'nome' => '1',
        ]);
        Category::create([
            'nome' => '3',
        ]);
        Category::create([
            'nome' => '4',
        ]);


    }
}
