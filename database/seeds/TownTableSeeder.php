<?php

use Illuminate\Database\Seeder;
use App\Town;

class TownTableSeeder extends Seeder
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
        		'name' 		=> 'Aguas',
        		'state_id'	=> 1

        	],
        	[
        		'name' 		=> 'Calientes',
        		'state_id'	=> 1

        	],
        	[
        		'name' 		=> 'Zacate',
        		'state_id'	=> 2
        	],
        	[
        		'name' 		=> 'Cas',
        		'state_id'	=> 2
        	]
        );
    	Town::insert($data);
    }
}
