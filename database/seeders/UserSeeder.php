<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin         = Role::where('name', '=', 'admin')->first();
        $role_manager       = Role::where('name', '=', 'manager')->first();
        
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin.test@gmail.com.br';
        $admin->password = bcrypt('admints1234!');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $manager = new User();
        $manager->name = 'Manager';
        $manager->email = 'manager.test@gmail.com.br'; 
        $manager->password = bcrypt('managerts1234!');
        $manager->save();
        $manager->roles()->attach($role_manager);
    }
}
