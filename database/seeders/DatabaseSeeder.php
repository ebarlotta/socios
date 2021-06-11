<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('socios')->insert(['nombre'=>'pepe','dni'=>'12345678','direccion'=>'por ahi 222','nacimiento'=>'2020-10-10','email'=>'pepe@gmail.com','telefono'=>'456798456','url'=>'www.google.com']);
        DB::table('socios')->insert(['nombre'=>'juan','dni'=>'12332378','direccion'=>'por allk 222','nacimiento'=>'2010-10-10','email'=>'juan@gmail.com','telefono'=>'223242434','url'=>'www.google1.com']);
    }
}
