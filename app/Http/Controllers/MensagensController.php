<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactos;
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
    public function mensagens()
    {
        $mensagens = Contactos::all();
        $totalmensagens = Contactos::all('id')->count();
        return view('paginas.backend.mensagens', compact('mensagens', 'totalmensagens'));
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

    public function frontend_store(Request $mensagens)
    {
        $mensagem = new Contactos();
        $mensagem->name = $mensagens["nome"];
        $mensagem->email = $mensagens["email"];
        $mensagem->assunto = $mensagens["assunto"];
        $mensagem->mensagem = $mensagens["mensagem"];
        $mensagem->save();
        return redirect()->route('contactos');
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
