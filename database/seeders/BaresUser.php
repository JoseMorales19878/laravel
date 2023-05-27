<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\STR;

class BaresUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
			DB::table('bares')->insert([
		'nombre'=>Str::random(8),//cadena aleatorias
		'descripcion'=>Str::random(8).'@gmail.com'		
		]);
    }
}
