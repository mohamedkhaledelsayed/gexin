<?php

use Illuminate\Database\Seeder;
use App\Admins;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin = Admins::create([
            'name'=>'Super_Admin',
            'email'=>'super_Admin@app.dev',
            'password'=>bcrypt('super_Admin')
        ]);
        $Admin->save();
    }
}
