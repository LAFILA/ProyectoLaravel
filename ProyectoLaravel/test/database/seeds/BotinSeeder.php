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
     

    }
}