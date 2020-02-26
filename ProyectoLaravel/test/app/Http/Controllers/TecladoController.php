<?php

namespace App\Http\Controllers;

use App\Teclado;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TecladoController extends Controller
{
    
    public function index()
    {
       // $Teclados = DB::table('Teclados')->get();
        $Teclados = Teclado::all();

        

        $title = 'Listado de Teclados';

     //   return view('Teclados.index')
    //       ->with('Teclados', Teclado::all())
     //   ->with('title', 'Listado de Teclados');

        return view('Teclados', compact('title', 'Teclados'));
    }

    public function show($id)
    {
        $Teclado = Teclado::findOrFail($id);

        return view('Teclados.show',compact('Teclado'));
    }

    public function create()
    {
        return view('Teclados.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'idioma' => 'required',
            'tamano' => 'required',
            'tipo' => 'required',
            'cherry' => 'required',
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'idioma.required' => 'El campo idioma es obligatorio',
            'tamano.required' => 'El campo tamano es obligatorio',
            'tipo.required' => 'El campo tipo es obligatorio',
            'cherry.required' => 'El campo cherry es obligatorio',
        ]);

        

        Teclado::create([
            'name' => $data['name'],
            'idioma' => $data['idioma'],
            'tamano' => $data['tamano'],
            'tipo' => $data['tipo'],
            'cherry' => $data['cherry'],

        ]);

        return redirect()->route('Teclados.index');
    }

    public function edit(Teclado $Teclado)
    {
        return view('Teclados.edit', ['Teclado' => $Teclado]);
    }

    public function update(Teclado $Teclado)
    {
        $data = request()->validate([
            'name' => 'required',
            'idioma' => 'required',
            'tamano' => 'required',
            'tipo' => 'required',
            'cherry' => 'required',
        ]);

        $Teclado->update($data);

        return redirect()->route('Teclados.show', ['Teclado' => $Teclado]);
    }

    function destroy(Teclado $Teclado)
    {
        $Teclado->delete();
        
        return redirect()->route('Teclados.index');
    }
}
