<?php

namespace App\Http\Controllers;

use App\Models\Contactos;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;

class MensagensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexFrontend() {
        $mensagens = Contactos::all();
        $totalmensagens = Contactos::all('id')->count();
        return view('paginas.frontend.contactos', compact('mensagens', 'totalmensagens'));
    }

    public function index()
    {
        $mensagens = Contactos::all();
        $totalmensagens = Contactos::all('id')->count();
        return view('paginas.backend.contactos.index', compact('mensagens', 'totalmensagens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    public function frontend_store(Request $request)
    {
        $fields = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'assunto' => 'required',
                'mensagem' => 'required'
            ],
            [
                'pergunta' => 'Campo pergunta não ficou preenchido',
                'categoria' => 'Campo categoria não ficou preenchido',
                'assunto' => 'Campo resposta não ficou preenchido',
                'mensagem' => 'Campo categoria não ficou preenchido'
            ]
        );
        $mensagem = new Contactos();
        $mensagem->fill($fields);
        $mensagem->save();
        return redirect()->route('contactos')->with('success', 'Dúvida enviada com sucesso', compact('mensagem'));
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
    public function destroy(Request $request, Contactos $mensagem)
    {
        $mensagem->delete($mensagem);
        return redirect()->route('contactos.index')->with('success', 'Mensagem removida com sucesso', compact('mensagem'));
    }
}
