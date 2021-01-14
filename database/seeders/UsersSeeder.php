<?php

namespace Database\Seeders;
use App\Models\User;
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
        //
        User::create([
            'fname'=>'admin',
            'lname'=>'jarin',
        'email'=>'a@gmail.com',
        'password'=>bcrypt('123'),
            'role'=>'admin',
            'phone'=>'12'
    ]);
    }
}
