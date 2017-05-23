<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Substation;

class SubstationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("zh_CN");
        foreach (range(1, 10) as $key => $value) {
        foreach (range(1, 4) as $index) {
        	Substation::create([
        		'name' => $faker->address .'分站',
        		'addr' => $faker->address,
        		'phone' => $faker->phoneNumber,
        		'email' => $faker->email,
        		'description' => $faker->sentence,
        		'sub_company_id' => $value

    		]);
        }
    }
    }
}
