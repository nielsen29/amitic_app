<?php

use Illuminate\Database\Seeder;
use \App\Role;
use \App\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $role_user = Role::where('name','participante')->first();
        $role_admin = Role::where('name','admin')->first();
        */


        //
        $user = new User();
        $user->name = 'Participante';
        $user->email = 'participante@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach(Role::where('name','participante')->first());

        $user = new User();
        $user->name = 'Administrador';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach(Role::where('name','admin')->first());

    }
}
