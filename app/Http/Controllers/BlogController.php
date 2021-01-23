<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function indexFrontend()
    {
        $blogs = Blog::all();
        $categorias = Category::all();
        $users = User::all();
        return view('paginas.frontend.blog', compact([
            'blogs',
            'categorias',
            'users'
        ]));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('paginas.backend.blog.index', compact([
            'blogs'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $categories = Category::all();
        $users = User::all();
        return view('paginas.backend.blog.show', ['showBlog' => $blog], compact('blog','users','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        $users = User::all();
        return view('paginas.backend.blog.edit', compact('categories', 'blog','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {

        $blog->update($request->all());

        return redirect()->route('blog.index')
            ->with('success', 'Post was updated successfully', compact('blog'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Blog $blog)
    {
        $blog->delete($blog);

        return redirect()->route('blog.index')->with('success', 'Post successfully deleted', compact('blog'));
    }

    public function create(Blog $blog)
    {
        $categories = Category::all();
        $id_user_auth = Auth::id();
        return view('paginas.backend.blog.create', compact('categories', 'id_user_auth'));
    }

    public function store(Request $request)
    {
        $fields = $request->validate(
            [
                'id_categoria' => 'required',
                'titulo'=> 'required',
        'data' => 'required',
        'preview' => 'required',
        'descricao' => 'required',
        'img' => 'required',
        'id_user' => 'required',

            ],
        );
        $blog = new Blog();
        $blog->fill($fields);

        if ($request->hasFile('img')) {
            $photo_path = $request->file('img')->store('public/blog');
            $blog->img = basename($photo_path);
        }

        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Post adicionada com sucesso');
    }
}
