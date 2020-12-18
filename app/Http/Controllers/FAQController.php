<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perguntas;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        $perguntas = Perguntas::all();
        $totalperguntas = Perguntas::all('id')->count();
        $totalcategorias = Perguntas::distinct('categoria')->count();
        return view('paginas.backend.faq', compact('perguntas', 'totalperguntas', 'totalcategorias'));
    }

    public function inserir_pergunta()
    {
        $pergunta = Perguntas::all();
        return view('paginas.backend.insert_pergunta', compact('pergunta'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inserir(Request $perguntas)
    {
        $pergunta = new Perguntas();
        $pergunta->pergunta = $perguntas["pergunta"];
        $pergunta->categoria = $perguntas["categoria"];
        $pergunta->resposta = $perguntas["resposta"];
        $pergunta->save();
        return redirect()->route('teste');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
