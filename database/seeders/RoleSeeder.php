<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        $role = [
            [
                'name' => 'admin',
            ],
            [
                'name' => 'user',
            ],
        ];
        
        foreach ($role as $key => $value) {
            Role::create($value);
        }
    }
}
