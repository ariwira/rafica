<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin',
                'display_name' => 'Admin',
                'description' => 'Admin'
            ],
            [
                'name' => 'user',
                'display_name' => 'User',
                'description' => 'User'
            ]
        ];
        foreach ($roles as $key => $value) {
            Role::create($value);
        }
    }
}
