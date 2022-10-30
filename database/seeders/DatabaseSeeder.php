<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CategoriaProducto;
use App\Models\CategoriaServicio;
use App\Models\Doctor;
use App\Models\Empresa;
use App\Models\Especialidad;
use App\Models\Paciente;
use App\Models\Persona;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Servicio;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         Persona::factory(100)->create();
        CategoriaServicio::factory(100)->create();
        CategoriaProducto::factory(100)->create();
        Producto::factory(100)->create();
        Servicio::factory(100)->create(); 
        Paciente::factory(50)->create();
        Especialidad::factory(10)->create();
        Doctor::factory(20)->create();

        Empresa::factory(10)->create();
        Proveedor::factory(50)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
