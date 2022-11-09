<?php

namespace App\Http\Controllers;

use App\Models\Musica;
use Illuminate\Http\Request;

class MusicasController extends Controller
{
    public function index()
    {
        return response()->json(['musicas' => Musica::all()]);
    }

    public function store(Request $request)
    {
        Musica::create($request->all());
        return response()->json(['mensagem' => 'Música inserida com sucesso']);
    }

    public function show($id)
    {
        return response()->json(['musica' => Musica::findOrFail($id)]);
    }
    
    public function update(Request $request, $id)
    {
        Musica::findOrFail($id)->update($request->all());
        return response()->json(['mensagem' => 'Música atualizada com sucesso']);
    }

    public function destroy($id)
    {
        Musica::findOrFail($id)->delete();
        return response()->json(['mensagem' => 'Música excluída com sucesso']);
    }
}
