<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Ciência e tecnologia‎ ',
        ]);
        Category::create([
            'name' => 'Crime, Direito e Justiça‎ ',
        ]);
        Category::create([
            'name' => 'Cultura e entretenimento‎',
        ]);
        Category::create([
            'name' => 'Economia e negócios‎',
        ]);
        Category::create([
            'name' => 'Educação',
        ]);
        Category::create([
            'name' => 'Feiras e eventos‎',
        ]);
        Category::create([
            'name' => 'Homem e sociedade',
        ]);
        Category::create([
            'name' => 'Política e conflitos',
        ]);
        Category::create([
            'name' => 'Religião‎',
        ]);
        Category::create([
            'name' => 'Saúde‎',
        ]);
        Category::create([
            'name' => 'Sociedade‎ ',
        ]);
    }
}
