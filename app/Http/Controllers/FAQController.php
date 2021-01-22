<?php

namespace App\Http\Controllers;

use App\Models\CategoriaPergunta;
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
        return view('paginas.backend.faq.index', compact('perguntas', 'totalperguntas'));
    }

    public function indexFrontend()
    {
        $perguntas = Perguntas::all();
        $categorias = CategoriaPergunta::all();
        return view('paginas.frontend.faq', compact('perguntas', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categorias = CategoriaPergunta::all();
        $pergunta = Perguntas::all();
        return view('paginas.backend.faq.create', compact('pergunta', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate(
            [
                'pergunta' => 'required',
                'resposta' => 'required'
            ]
        );
        $pergunta = new Perguntas();
        $pergunta->fill($fields);
        $pergunta->categoria_id = $request->categoria;
        $pergunta->save();
        return redirect()->route('faq.index')->with('success', 'Pergunta adicionada com sucesso', compact('pergunta'));
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
        $categorias = CategoriaPergunta::all();
        return view('paginas.backend.faq.edit', compact('pergunta', 'categorias'));
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
        $fields = $request->validate(
            [
                'pergunta' => 'required',
                'resposta' => 'required'
            ]
        );
        $pergunta->update($fields);
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
