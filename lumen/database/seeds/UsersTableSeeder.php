<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //  toda vez que um seed roda, ele não da truncate automaticamente,ou seja, é inserido registro
        // sob registro
        \DB::table('users')->truncate();
        //  utiliza o factory e cria 30 registros. Se não passado parametro, cria-se 1.
        //  $factory->define(App\User::class, function (Faker\Generator $faker) 
        factory(App\User::class, 30) ->create();
    }
}
