<?php

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
        $users = [
            [
                'username' => 'receptionist',
                'fullname' => 'Name of Receptionist',
                'password' => bcrypt('password'),
                'role' => 'receptionist'
            ],
            [
                'username' => 'medtech1',
                'fullname' => 'Name of Med Tech',
                'password' => bcrypt('password'),
                'role' => 'medtech'
            ],
            [
                'username' => 'lentrix',
                'fullname' => 'Benjie B. Lenteria',
                'password' => bcrypt('password'),
                'role' => 'admin'
            ],
        ];

        foreach($users as $user) {
            \App\User::create($user);
        }
    }
}
