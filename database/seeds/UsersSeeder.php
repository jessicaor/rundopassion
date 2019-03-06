<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $admin = \App\User::create([
           'name'=>'admin',
           'email'=>'bububu@bu.bu',
           'password'=>bcrypt('oooooo')
       ]);

       $visiter = \App\User::create([
        'name'=>'visiter',
        'email'=>'bobobo@bo.bo',
        'password'=>'uuuuuu',
    ]);

       $admin->assignRole('admin');
    }
}
