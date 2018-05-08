<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i=1 ; $i<20 ; $i++){
            DB::table('users')->insert([
                'name' => 'user'.$i,
                'email'=> 'user'.$i.'@email.com',
                'password' => bcrypt('12345'),
                'gender'=>1,
                'address'=>'123',
                'phone'=>'11',
                'is_admin'=>0
            ]);
        }
        DB::table('users')->insert([
            'name' => 'admin',
            'email'=> 'admin@email.com',
            'password' => bcrypt('12345'),
            'gender'=>1,
            'address'=>'123',
            'phone'=>'11',
            'is_admin'=>1
        ]);
    }
}
