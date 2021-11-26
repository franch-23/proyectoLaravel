<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class alumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { for ($i=0; $i<10; $i++ ){
        DB:: table ('table_alumno')->insert([
            'name' => Str::random(10),
            'telefono' => Str::random(10),
            'edad' => Str::random(10),
            'password' => Hash::make('password'),
            'email' =>  Str::random(10).'@gmail.com',
            'sexo' => Str::random(10),

        ]);
    }

    }
}
