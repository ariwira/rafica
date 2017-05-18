<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;

class PermissionRoleAttachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::findOrFail(1);
        $admin->attachPermissions([
            '1','2','3','4','5','6',
            '7','8','9','10','11'
        ]);

        $user = Role::findOrFail(2);
        $user->attachPermissions([
            '8','9','10','11'
        ]);
    }
}
