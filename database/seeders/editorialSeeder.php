<?php

namespace Database\Seeders;

use Illuminate\Support\FACADES\DB;
use Illuminate\Database\Seeder;

class editorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editorialess =[
        
        [
            'id' =>1,
            'nombre'=>'Norma',
            'direccion'=>'Av. El Dorado 90-10',
            'ciudad'=>'Bogotá',
            'telefono'=>'426652',

        ],

        [
            'id' =>2,
            'nombre'=>'Mc Graw Hill',
            'direccion'=>'Carrera 85 k #46a66',
            'ciudad'=>'Bogotá',
            'telefono'=>'3102266',

        ],

        [
            'id' =>3,
            'nombre'=>'Alfaomega Colombiana',
            'direccion'=>'Cl. 62 ##2046 ',
            'ciudad'=>'Bogotá',
            'telefono'=>'485210',

        ],

        [
            'id' =>4,
            'nombre'=>'Los Tres Editores S.A.S.',
            'direccion'=>'Cl. 32 ##8a-95',
            'ciudad'=>'Cali',
            'telefono'=>'125520',

        ],

        [
            'id' =>5,
            'nombre'=>'La Santillana',
            'direccion'=>'Cra. 82 #11241 N33AA',
            'ciudad'=>'Medellin',
            'telefono'=>'700022',

        ],
            
        ];
        DB::table('editorial')->insert($editorialess);
    }
}
