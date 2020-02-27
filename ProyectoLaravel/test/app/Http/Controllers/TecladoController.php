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
        $teclados = Teclado::all();

        

        $title = 'Listado de Teclados';

     //   return view('Teclados.index')
    //       ->with('Teclados', Teclado::all())
     //   ->with('title', 'Listado de Teclados');

        return view('teclados', compact('title', 'teclados'));
    }

    public function show($id)
    {
        $teclado = Teclado::findOrFail($id);

        return view('teclados.showt',compact('teclado'));
    }

    public function create()
    {
        return view('teclados.createt');
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

        return redirect()->route('teclados.index');
    }

    public function edit(Teclado $teclado)
    {
        return view('teclados.editt', ['teclado' => $teclado]);
    }

    public function update(Teclado $teclado)
    {
        $data = request()->validate([
            'name' => 'required',
            'idioma' => 'required',
            'tamano' => 'required',
            'tipo' => 'required',
            'cherry' => 'required',
        ]);

        $teclado->update($data);

        return redirect()->route('teclados.showt', ['teclado' => $teclado]);
    }

    function destroy(Teclado $teclado)
    {
        $teclado->delete();
        
        return redirect()->route('teclados.index');
    }
}
