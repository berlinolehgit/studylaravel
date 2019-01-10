<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Oleg Admin',
            'email' => 'olehberlin@gmail.com',
            'password' => bcrypt('123456'),
            'role' => User::ROLE_ADMIN,
            'phone' => '098354423',
            'remember_token' => str_random(20),
        ]);

        User::create([
            'name' => 'Igor',
            'email' => 'igor@gmail.com',
            'password' => bcrypt('654321'),
            'role' => User::ROLE_MANAGER,
            'phone' => '0987766555',
            'remember_token' => str_random(20),
        ]);

        User::create([
            'name' => 'Dima',
            'email' => 'dima@gmail.com',
            'password' => bcrypt('111111'),
            'role' => User::ROLE_MANAGER,
            'phone' => '0953534546',
            'remember_token' => str_random(20),
        ]);

        factory(User::class,10)->create();

    }
}
