<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vinhos;
use App\Models\Vinhosimg;
use App\Models\category_wine;
use App\Models\User;

class VinhosController extends Controller
{
	
	
	public function vinhos()
    {
        $vinhos = Vinhos::all(); 
        $vinhosimg = Vinhosimg::all();
        $categorias = category_wine::all();
        $users = User::all();
		
		$vinho_select = $vinhos->where('id',1);
		$vinho_select->all();
		
        return view('paginas.frontend.vinho_produto', compact([
            'vinhos',
            'vinhosimg',
            'categorias',
            'users',
			'vinho_select',
        ]));
    }

	/**public function store(Request $request)
    {
        $vinho = new Vinhos();
        $vinho->fill($request->all());

        $path= Storage::putFileAs('public\assets\img\vinhos', $request->file('img'), 'vinhos_' . time() . '.' . $request->file('img')->extension());

        $vinho->foto = $path;
        $vinho->save();
        return redirect()->route('receitas.index');
    }*/

	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vinhos = Vinhos::all(); 
        $vinhosimg = Vinhosimg::all();
        $categorias = category_wine::all();
        $users = User::all();
        return view('paginas.backend.vinhos.index', compact([
            'vinhos',
            'vinhosimg',
            'categorias',
            'users'
        ]));
    }

    public function vinhos_detalhes($vinho)
    {
        $vinho_det = Vinhos::find($vinho);

        return view('paginas.frontend.vinho_produto', compact([
            'vinho_det'
        ]));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$vinho = Vinhos::all();
        return view('paginas.backend.vinhos.create', compact('vinho'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vinho = new Vinhos();
        $vinho->fill($request->all());

        $path= Storage::putFileAs('public\assets\img\vinhos', $request->file('img'), 'vinhos_' . time() . '.' . $request->file('img')->extension());

        $vinho->foto = $path;
        $vinho->save();
        return redirect()->route('vinhos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vinhos $vinhos)
    {
        return view('paginas.backend.vinhos.show', compact('vinhos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vinhos $vinhos)
    {
        return view('paginas.backend.vinhos.edit', compact('vinhos'));
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
