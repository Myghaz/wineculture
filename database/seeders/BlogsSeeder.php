<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Carbon\Carbon;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'titulo' => 'BLOGUM',
            'data' => Carbon::parse('2020-06-26'),
            'preview' => 'veja este blog, muito fixe',
            'descricao' => 'esta descricao é do blog que é top',
            'img' => 'blog1.jpg',
        ]);
        Blog::create([
            'titulo' => 'BLOGDOIS',
            'data' => Carbon::parse('2020-06-26'),
            'preview' => 'MAIS UM FIZE BLOG',
            'descricao' => 'SEGINDA DESCRICAO DESGE BLOG TOPPPPP',
            'img' => 'blog2.jpg',
        ]);
    }
}
