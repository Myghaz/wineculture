<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriablogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('paginas.backend.categoriasblog.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = Category::all();
        return view('paginas.backend.categoriasblog.create', compact('categories'));
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
                'name' => 'required',
                'img' => 'required'
            ],
        );
        $categories = new Category();
        $categories->fill($fields);
        $categories->save();
        return redirect()->route('categoriasblog.index')->with('success', 'Categoria adicionada com sucesso', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $categories)
    {
        return view('paginas.backend.categoriasblog.show', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $categories)
    {
        return view('paginas.backend.categoriasblog.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $categories)
    {
        $fields = $request->validate(
            [
                'name' => 'required',
                'img' => 'required'
            ]
        );
        $categories->update($fields);
        $categories->save();
        return redirect()->route('categoriasblog.index')
            ->with('success', 'Categoria editada com sucesso', compact('categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $categories)
    {
        $categories->delete($categories);
        return redirect()->route('categoriasblog.index')->with('success', 'Categoria removida com sucesso', compact('categories'));
    }
}
