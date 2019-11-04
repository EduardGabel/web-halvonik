<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
           'meno' => "Marian",
           'priezvisko' => "Keleba",
           'email' => "m.keleba@ukf.sk",
           'heslo' => bcrypt('secret'),
           'vek' => 33
        ]);
    }
}
