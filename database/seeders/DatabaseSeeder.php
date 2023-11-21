<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\materia;
use App\Models\usuario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        usuario::factory(10)->create();

        usuario::factory()->create([
            'username'          => 'alumno',
            'password'          => '123456789',
            'correo'            => 'alumno@alumno.com',
            'RUT'               => '12345678',
            'digVer'            => '9',
            'Nombre'            => 'Alonso',
            'primerApellido'    => 'Salas',
            'segundoApellido'   => 'Inostroza',
            'tipoUsuario'       => 'alumno',
            'descripcion'       => ''
        ]);
        usuario::factory()->create([
            'username'          => 'profesor',
            'password'          => '123456789',
            'correo'            => 'profesor@profesor.com',
            'RUT'               => '98765432',
            'digVer'            => 'k',
            'Nombre'            => 'Juan',
            'primerApellido'    => 'Salas',
            'segundoApellido'   => 'Rojas',
            'tipoUsuario'       => 'profesor',
            'descripcion'       => ''
        ]);

        materia::factory(20)->create();
    }
}
