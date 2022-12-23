<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  Spatie\Permission\Models\Rol;


//spatie
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SeederTablePermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $permisos=[
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            'ver-blog',
            'crear-blog',
            'editar-blog',
            'borrar-blog',
            
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',

            'ver-comentario',
            'crear-comentario',

            'ver-imagen',
            'crear-imagen',
            'borrar-imagen',
            

        ];
        foreach ($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}
