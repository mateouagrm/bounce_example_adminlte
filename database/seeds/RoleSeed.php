<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bouncer::allow('administrator')->to('users_manage');

        $crear_administrador    = 'crear_administrador';
        $listar_administrador   = 'listar_administrador';
        $crear_usuario          = 'crear_usuario';
        $listar_usuario         = 'listar_usuario';
        $listar_privilegios     = 'listar_privilegios';
        $listar_roles           = 'listar_roles';
        $crear_roles            = 'crear_roles';
        $crear_institucion      = 'crear_institucion';
        $listar_institucion     = 'listar_institucion';
    }
}
