<?php

use Illuminate\Database\Seeder;
use App\State;


class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
        	[
        		'name' 		=> 'Aguascalientes'
        	],
        	[
        		'name' 		=> 'Zacatecas'
        	]
        );
    	State::insert($data);

    }
}
