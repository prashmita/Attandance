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
        DB::table('users')->insert([
            'first_name' => 'Prashmita',
            'last_name' => 'Dass',
            'email' => 'dassprashmita'.'@gmail.com',
            'password' => bcrypt('tanab'),
            'phone'=>'9849485609',
            'permission'=>'0',
            'position_id'=>'1',
            'status'=>'1'
        ]);
    }
}
