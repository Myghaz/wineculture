<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category_wine;
class CategoryWineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category_wine::create([
            'nome' => 'Tinto',
        ]);
        category_wine::create([
            'nome' => 'Verde',
        ]);
        category_wine::create([
            'nome' => 'Rosé',
        ]);
        category_wine::create([
            'nome' => 'Branco',
        ]);
        category_wine::create([
            'nome' => 'Espumante',
        ]);
    }
}
