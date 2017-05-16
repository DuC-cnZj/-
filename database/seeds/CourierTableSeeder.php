<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Courier;

class CourierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create("zh_CN");
       foreach (range(13, 59) as $key => $value) {
       	 foreach (range(1, 4) as $index) {
        	Courier::create([
        		'name' => $faker->name,
        		'addr' => $faker->address,
        		'phone' => $faker->phoneNumber,
        		'age' => $faker->numberBetween(1,99),
        		'substation_id' => $value

    		]);
        }
       }

    }
}
