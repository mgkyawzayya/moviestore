<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $password = Hash::make('drfone@12345');

        User::create([
            'name' => 'Dr Fone',
            'email' => 'admin@drfone.com',
            'password' => $password,
        ]);
    }
}
