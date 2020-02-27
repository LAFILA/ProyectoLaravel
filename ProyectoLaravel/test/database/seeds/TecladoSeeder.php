<?php

use App\Teclado;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TecladoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //$professions = DB::select('SELECT id FROM professions WHERE title = ?', ['Desarrollador back-end']);
                
        Teclado::create([
            'name' => 'ElDorallaki',
            'idioma' => 'Español',
            'tamano' => 'Grande',
            'tipo' => 'Gamer',
            'cherry' => 'Rojo',
        ]);

        Teclado::create([
            'name' => 'PalosGeimer',
            'idioma' => 'Chino',
            'tamano' => 'Pequeño',
            'tipo' => 'Gamer',
            'cherry' => 'Marron',
        ]);

        Teclado::create([
            'name' => 'VamoAhCalmarno',
            'idioma' => 'Español',
            'tamano' => 'Mediano',
            'tipo' => 'Oficina',
            'cherry' => 'Azul',
        ]);

        Teclado::create([
            'name' => 'ElSinTeclas',
            'idioma' => 'Nodefinido',
            'tamano' => 'ExtraGrande',
            'tipo' => 'Manco',
            'cherry' => 'No',
        ]);

    }
}