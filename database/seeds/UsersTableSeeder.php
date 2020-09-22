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
       $user= App\User::create([
        'name'=>'Super_Admin',
        'email'=>'super_Admin@app.dev',
        'password'=>bcrypt('super_Admin')
       ]);
    }
}
