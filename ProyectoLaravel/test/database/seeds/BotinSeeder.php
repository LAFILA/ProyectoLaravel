<?php

use App\Botin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BotinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //$professions = DB::select('SELECT id FROM professions WHERE title = ?', ['Desarrollador back-end']);
                
        Botin::create([
            'name' => 'Jumanji',
            'marca' => 'Adidas',
            'genero' => 'Masculino',
            'tipo' => 'Deportivas',
            'modalidad' => 'Escalada',
        ]);


        Botin::create([
            'name' => 'Habulani',
            'marca' => 'Adidas',
            'genero' => 'Femenino',
            'tipo' => 'Plataforma',
            'modalidad' => 'Zapatos',
        ]);


        Botin::create([
            'name' => 'Kasd',
            'marca' => 'Kelme',
            'genero' => 'Masculino',
            'tipo' => 'Botas',
            'modalidad' => 'Escalada',
        ]);



        Botin::create([
            'name' => 'Air for One',
            'marca' => 'Nike',
            'genero' => 'Unisex',
            'tipo' => 'Zapatillas',
            'modalidad' => 'Urbanas',
        ]);
     

    }
}