<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Añadimos
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creamos el usuario superadministrador
        $superadmin = User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678')

        ]);
        
        //creamos el rol administrador y el rol Usuario
        $rol= Role::create(['name'=>'Administrador']);
        Role::create(['name'=>'Usuario']);
        //llamamos todos los permisos y los guardamos en el array $permisos
        $permission = Permission::pluck('id','id')->all();
        //asignamos todos los permisos al nuevo rol
        $rol->syncPermissions($permission);
        //asignamos el rol administrador al usuario superadmin
        $superadmin ->assignRole([$rol->id]);
    }
}
