<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\SubCompany;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("zh_CN");
        foreach (range(1, 10) as $index) {
        	SubCompany::create([
        		'name' => $faker->company,
        		'addr' => $faker->address,
        		'phone' => $faker->phoneNumber,
        		'email' => $faker->email,
        		'description' => $faker->sentence,

    		]);
        }
    }
}
