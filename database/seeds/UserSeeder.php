<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Permission;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = new User();
        $superadmin->name = "admin";
        $superadmin->username = "admin";
        $superadmin->email = "admin_rafica@jasamarga.com";
        $superadmin->password = bcrypt('admin');
        $superadmin->jabatan = "Admin";
        $superadmin->save();

        $faker = Faker\Factory::create();
        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            User::create([
               'name' => $faker->firstNameMale,
               'username' => $faker->userName,
               'email' => $faker->unique()->companyEmail,
               'password' => bcrypt('rafica'),
               'jabatan' => 'admin cabang'
            ]);
        }
        $super = User::find(1);
        $super->attachRole(1);
        $super->save();

        for ($i = 2;$i<=11;$i++){
            $user = User::find($i);
            $user->attachRole(2);
            $user->save();
        }
    }
}
