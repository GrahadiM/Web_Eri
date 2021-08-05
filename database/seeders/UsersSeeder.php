<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
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
        User::truncate();
        $user = [
            [
                'name' => 'Admin',
                'role_id' => 1,
                'status_id' => 1,
                'gender' => 'pria',
                'avatar' => 'admin.png',
                'email' => 'admin@test.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
                'email_verified_at' => '2021-07-09 20:19:13',
            ],
            [
                'name' => 'User 1',
                'role_id' => 2,
                'status_id' => 1,
                'gender' => 'pria',
                'avatar' => 'user.png',
                'email' => 'user@test.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
                'email_verified_at' => '2021-07-09 20:19:13',
            ],
            [
                'name' => 'User 2',
                'role_id' => 2,
                'status_id' => 1,
                'gender' => 'pria',
                'avatar' => 'user.png',
                'email' => 'user2@test.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
                'email_verified_at' => '2021-07-09 20:19:13',
            ],
        ];
        
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
