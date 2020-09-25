<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
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
			'name' => 'shubham ralli',
			'email' => 'sralli73@gmail.com',
			'password' => Hash::make('9868513510'),
			'remember_token' => '12345',
        ]);
    }
}
