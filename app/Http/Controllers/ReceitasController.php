<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\receitas;
use Illuminate\Http\Request;
use App\Models\category_wine;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ReceitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $receitas = receitas::all();
            $category_wines = category_wine::all();
            $Users = User::all();
            return view('paginas.backend.receitas.index', compact('receitas', 'category_wines', 'Users'));
    }
    public function indexFrontend()
    {
            $receitas = receitas::all();
            $category_wines = category_wine::all();
            $Users = User::all();
            return view('paginas.frontend.receitas', compact('receitas', 'category_wines', 'Users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories_wines = category_wine::all();
        return view('paginas.backend.receitas.create', compact('categories_wines'));
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
                'nome' => 'required',
                'foto' => 'required',
                'descricao' => 'required',
                'id_categoria' => 'required|exists:categoria,id'
            ],
            [
                'nome' => 'Campo nome não ficou preenchido',
                'foto' => 'Campo foto não ficou preenchido',
                'descricao' => 'Campo descrição não ficou preenchido',
                'id_categoria' => 'Campo categoria não ficou preenchido'
            ]
            );
        $receita = new Receitas();
        $receita->fill($fields);
        $receita->id_categoria = $request->id_categoria;
        $receita->id_user = Auth::user()->id;

        $path= Storage::putFileAs('public/receitas', $request->file('img'), 'receitas_' . time() . '.' . $request->file('img')->extension());

        $receita->foto = $path;
        $receita->save();

        return redirect()->route('receitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Receitas $receita)
    {
        //$categoria = category_wine::findOrFail(3);
        //dd($categoria->receitas);

        return view('paginas.backend.receitas.show', compact('receita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Receitas $receita)
    {
        $category_wines = category_wine::all();
        return view('paginas.backend.receitas.edit', compact('receita' , 'category_wines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, receitas $receita)
    {
        $fields = $request->validate(
            [
                'nome' => 'required',
               
                'descricao' => 'required',
            ],
            [
                'nome' => 'Campo nome não ficou preenchido',
              
                'descricao' => 'Campo descrição não ficou preenchido',
            ]
            );
        $receita->update($fields);
        $receita->save();
        return redirect()->route('receitas.index')
        ->with('success', 'Receita foi editada com sucesso', compact('receita'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, receitas $receita)
    {
        $receita->delete($receita);
        return redirect()->route('receitas.index')->with('success', 'Receita removida com sucesso', compact('receita'));
    }
}
