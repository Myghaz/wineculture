<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UsersSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'miguel.ciencia655@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Miguel',
            'apelido' => 'Pereira',
            'data_nasc' => Carbon::parse('2000-06-26'),
        ]);
    }
}
