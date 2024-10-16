<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Roles que queremos insertar en la base de datos
        $roles = ['Administrador', 'Recepcionista', 'Cliente', 'Supervisor', 'Agente'];

        // Crear los roles usando un foreach para insertar cada uno
        foreach ($roles as $rol) {
            Rol::create([
                'nombre' => $rol,  // Asignar el nombre de cada rol
            ]);
        }
    }
}
