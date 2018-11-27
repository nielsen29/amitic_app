<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //se definen los roles que especifican los accesos de los usuarios al sistema.

        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrador';
        $role->save();

        $role = new Role();
        $role->name = 'participante';
        $role->description = 'Participante';
        $role->save();

        $role = new Role();
        $role->name = 'conferencista';
        $role->description = 'Conferencista';
        $role->save();

        $role = new Role();
        $role->name = 'comite';
        $role->description = 'Miembro del Comite';
        $role->save();

    }
}
