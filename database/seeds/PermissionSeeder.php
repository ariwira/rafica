<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'name' => 'create-account',
                'display_name' => 'Create All Account',
                'description' => 'Creating All Type of Accounts'
            ],
            [
                'name' => 'edit-account',
                'display_name' => 'Edit All Account',
                'description' => 'Ediiting All Type of Accounts'
            ],
            [
                'name' => 'view-account',
                'display_name' => 'View All Account',
                'description' => 'Viewing All Type Account'
            ],
            [
                'name' => 'delete-account',
                'display_name' => 'Delete All Account',
                'description' => 'Deleting All Type Account'
            ],
            [
                'name' => 'create-cabang',
                'display_name' => 'Create cabang',
                'description' => 'Creating cabang'
            ],
            [
                'name' => 'edit-cabang',
                'display_name' => 'Edit cabang',
                'description' => 'Ediiting cabang'
            ],
            [
                'name' => 'delete-cabang',
                'display_name' => 'Delete cabang',
                'description' => 'Deleting cabang'
            ],
            [
                'name' => 'create-dataInput',
                'display_name' => 'Create dataInput',
                'description' => 'Creating dataInput'
            ],
            [
                'name' => 'edit-dataInput',
                'display_name' => 'Edit dataInput',
                'description' => 'Ediiting dataInput'
            ],
            [
                'name' => 'view-dataInput',
                'display_name' => 'view dataInput',
                'description' => 'view dataInput'
            ],
            [
                'name' => 'delete-dataInput',
                'display_name' => 'Delete dataInput',
                'description' => 'Deleting dataInput'
            ],
        ];

        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}
