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
            'tipouser' => 'Administrador',
            'email' => 'administrador1@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Admin',
            'apelido' => 'Um',
            'data_nasc' => Carbon::parse('2000-06-26'),
            'created_at' => Carbon::parse('2020-06-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor1@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Produtor',
            'apelido' => 'Um',
            'data_nasc' => Carbon::parse('2001-05-15'),
            'created_at' => Carbon::parse('2020-05-15'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor2@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Produtor',
            'apelido' => 'Dois',
            'data_nasc' => Carbon::parse('1994-06-20'),
            'created_at' => Carbon::parse('2020-10-20'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor3@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Produtor',
            'apelido' => 'Tres',
            'img' => '29.jpg',
            'data_nasc' => Carbon::parse('1983-03-22'),
            'created_at' => Carbon::parse('2020-03-22'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador1@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Um',
            'img' => '26.jpg',
            'data_nasc' => Carbon::parse('2000-02-12'),
            'created_at' => Carbon::parse('2020-02-12'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador2@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Dois',
            'data_nasc' => Carbon::parse('2001-06-05'),
            'created_at' => Carbon::parse('2020-06-05'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador3@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Tres',
            'data_nasc' => Carbon::parse('2004-11-25'),
            'created_at' => Carbon::parse('2020-11-25'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador4@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador4',
            'apelido' => 'Quatro',
            'data_nasc' => Carbon::parse('1997-02-26'),
            'created_at' => Carbon::parse('2020-02-26'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador5@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Cinco',
            'data_nasc' => Carbon::parse('1974-09-26'),
            'created_at' => Carbon::parse('2020-09-26'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador6@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Seis',
            'data_nasc' => Carbon::parse('1980-12-15'),
            'created_at' => Carbon::parse('2020-12-15'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador7@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Sete',
            'data_nasc' => Carbon::parse('1998-01-26'),
            'created_at' => Carbon::parse('2020-01-26'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador8@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Oito',
            'data_nasc' => Carbon::parse('1993-02-26'),
            'created_at' => Carbon::parse('2020-10-26'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador9@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Nove',
            'data_nasc' => Carbon::parse('1993-09-26'),
            'created_at' => Carbon::parse('2020-08-26'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador10@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Dez',
            'data_nasc' => Carbon::parse('1993-09-26'),
            'created_at' => Carbon::parse('2020-04-26'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador11@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Onze',
            'data_nasc' => Carbon::parse('1993-11-26'),
            'created_at' => Carbon::parse('2020-11-26'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador12@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Doze',
            'data_nasc' => Carbon::parse('1993-03-26'),
            'created_at' => Carbon::parse('2020-07-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor4@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Produtor',
            'apelido' => 'Quatro',
            'data_nasc' => Carbon::parse('1974-09-26'),
            'created_at' => Carbon::parse('2020-06-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor5@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Produtor',
            'apelido' => 'cinco',
            'data_nasc' => Carbon::parse('1974-09-26'),
            'created_at' => Carbon::parse('2020-04-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor6@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Produtor',
            'apelido' => 'Seis',
            'data_nasc' => Carbon::parse('1980-12-15'),
            'created_at' => Carbon::parse('2020-01-15'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor7@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Produtor',
            'apelido' => 'Sete',
            'data_nasc' => Carbon::parse('1998-01-26'),
            'created_at' => Carbon::parse('2020-07-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor8@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Produtor',
            'apelido' => 'Oito',
            'data_nasc' => Carbon::parse('1993-02-26'),
            'created_at' => Carbon::parse('2020-08-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor9@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Produtor',
            'apelido' => 'Nove',
            'data_nasc' => Carbon::parse('1993-09-26'),
            'created_at' => Carbon::parse('2020-09-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor10@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Produtor',
            'apelido' => 'Dez',
            'data_nasc' => Carbon::parse('1993-09-26'),
            'created_at' => Carbon::parse('2020-02-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor11@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Produtor',
            'apelido' => 'Onze',
            'data_nasc' => Carbon::parse('1993-11-26'),
            'created_at' => Carbon::parse('2020-11-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor12@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Produtor',
            'apelido' => 'Doze',
            'data_nasc' => Carbon::parse('1993-03-26'),
            'created_at' => Carbon::parse('2020-06-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor13@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Produtor',
            'apelido' => 'Treze',
            'img' => '26.jpg',
            'data_nasc' => Carbon::parse('1993-03-26'),
            'created_at' => Carbon::parse('2020-12-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor14@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Produtor',
            'apelido' => 'Quatorze',
            'data_nasc' => Carbon::parse('1993-03-26'),
            'created_at' => Carbon::parse('2020-02-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor15@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Produtor',
            'apelido' => 'Quinze',
            'data_nasc' => Carbon::parse('1993-03-26'),
            'created_at' => Carbon::parse('2020-06-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor16@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Produtor',
            'apelido' => 'Dezasseis',
            'img' => '29.jpg',
            'data_nasc' => Carbon::parse('1993-03-26'),
            'created_at' => Carbon::parse('2020-12-26'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'miguel.ciencia655@gmail.com',
            'password' => bcrypt('123123123'),
            'name' => 'Miguel',
            'apelido' => 'Pereira',
            'img' => '142.jpg',
            'data_nasc' => Carbon::parse('1993-03-26'),
            'created_at' => Carbon::parse('2020-12-26'),
        ]);
    }
}
