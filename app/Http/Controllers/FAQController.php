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
    public function index()
    {
        $perguntas = Perguntas::all();
        $totalperguntas = Perguntas::all('id')->count();
        $totalcategorias = Perguntas::distinct('categoria')->count();
        return view('paginas.backend.faq.index', compact('perguntas', 'totalperguntas', 'totalcategorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pergunta = Perguntas::all();
        return view('paginas.backend.faq.create', compact('pergunta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pergunta = new Perguntas();
        $pergunta->fill($request->all());
        $pergunta->save();
        return redirect()->route('faq.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Perguntas $pergunta)
    {
        return view('paginas.backend.faq.show', compact('pergunta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Perguntas $pergunta)
    {
        return view('paginas.backend.faq.edit', compact('pergunta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perguntas $pergunta)
    {
        $pergunta->update($request->all());
        $pergunta->save();
        return redirect()->route('faq.index')
        ->with('success', 'Pergunta foi editada com sucesso', compact('pergunta'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Perguntas $pergunta)
    {
        $pergunta->delete($pergunta);
        return redirect()->route('faq.index')->with('success', 'Pergunta removida com sucesso', compact('pergunta'));
    }
}
