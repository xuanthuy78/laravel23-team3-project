<?php

use Illuminate\Database\Seeder;

class BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for( $i=0 ; $i<11 ; $i++ ) {
            DB::table('bills')->insert([
                'user_id' => 1,
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'date_order' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'total' => $faker->numberBetween($min = 10 , $max= 100),
                'payment' => $faker-> randomElement(['COD', 'Card']),
                'note' => $faker->sentence,
                'status' => $faker->boolean,
            ]);
        }
    }
}
