<?php

namespace App\Http\Controllers;

use App\Botin;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BotinController extends Controller
{
    
    public function index()
    {
       // $botines = DB::table('Botines')->get();
        $botines = Botin::all();

        

        $title = 'Listado de botines';

     //   return view('Botines.index')
    //       ->with('Botines', Botin::all())
     //   ->with('title', 'Listado de botines');

        return view('botines', compact('title', 'botines'));
    }

    public function show($id)
    {
        $botin = Botin::findOrFail($id);

        return view('botines.show',compact('botin'));
    }

    public function create()
    {
        return view('botines.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'marca' => 'required',
            'genero' => 'required',
            'tipo' => 'required',
            'modalidad' => 'required',
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'marca.required' => 'El campo marca es obligatorio',
            'genero.required' => 'El campo genero es obligatorio',
            'tipo.required' => 'El campo tipo es obligatorio',
            'modalidad.required' => 'El campo modalidad es obligatorio',
        ]);

        

        Botin::create([
            'name' => $data['name'],
            'marca' => $data['marca'],
            'genero' => $data['genero'],
            'tipo' => $data['tipo'],
            'modalidad' => $data['modalidad'],

        ]);

        return redirect()->route('botines.index');
    }

    public function edit(Botin $botin)
    {
        return view('botines.edit', ['botin' => $botin]);
    }

    public function update(Botin $botin)
    {
        $data = request()->validate([
            'name' => 'required',
            'marca' => 'required',
            'genero' => 'required',
            'tipo' => 'required',
            'modalidad' => 'required',
        ]);

        $botin->update($data);

        return redirect()->route('botines.show', ['botin' => $botin]);
    }

    function destroy(Botin $botin)
    {
        $botin->delete();
        
        return redirect()->route('botines.index');
    }
}
