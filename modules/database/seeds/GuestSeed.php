<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //? call class faker

class GuestSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID'); //? initial data menggunakan fake indonesia 
    	for($i = 1; $i <= 15; $i++){ 
    		DB::table('in_guest')->insert([
    			'name'         => $faker->name,
    			'email'        => $faker->freeEmail,
    			'phone'        => $faker->phoneNumber,
    			'address'      => $faker->address,
    			'status'       => $faker->randomDigitNotNull,
    			'id_group'     => $faker->randomDigitNotNull,
    			'id_sub_group' => $faker->randomDigitNotNull,
    		]);
        }
    }
}
