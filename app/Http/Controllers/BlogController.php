<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;

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

        return redirect()->route('blog.index')->with('success', 'Category successfully deleted', compact('blog'));
    }
}
