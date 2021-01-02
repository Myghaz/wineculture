<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;

class BlogController extends Controller
{
    public function blog()
    {
        //Ir buscar os posts organizados por mes
        $postJan = Blog::whereYear('data', '=', 2020)->whereMonth('data', '=', 1)->get();
        $postFev = Blog::whereYear('data', '=', 2020)->whereMonth('data', '=', 2)->get();
        $postMar = Blog::whereYear('data', '=', 2020)->whereMonth('data', '=', 3)->get();
        $postAbr = Blog::whereYear('data', '=', 2020)->whereMonth('data', '=', 4)->get();
        $postMai = Blog::whereYear('data', '=', 2020)->whereMonth('data', '=', 5)->get();
        $postJun = Blog::whereYear('data', '=', 2020)->whereMonth('data', '=', 6)->get();
        $postJul = Blog::whereYear('data', '=', 2020)->whereMonth('data', '=', 7)->get();
        $postAgo = Blog::whereYear('data', '=', 2020)->whereMonth('data', '=', 8)->get();
        $postSet = Blog::whereYear('data', '=', 2020)->whereMonth('data', '=', 9)->get();
        $postOut = Blog::whereYear('data', '=', 2020)->whereMonth('data', '=', 10)->get();
        $postNov = Blog::whereYear('data', '=', 2020)->whereMonth('data', '=', 11)->get();
        $postDez = Blog::whereYear('data', '=', 2020)->whereMonth('data', '=', 12)->get();
        $totalpostJan = $postJan->count();
        $totalpostFev = $postFev->count();
        $totalpostMar = $postMar->count();
        $totalpostAbr = $postAbr->count();
        $totalpostMai = $postMai->count();
        $totalpostJun = $postJun->count();
        $totalpostJul = $postJul->count();
        $totalpostAgo = $postAgo->count();
        $totalpostSet = $postSet->count();
        $totalpostOut = $postOut->count();
        $totalpostNov = $postNov->count();
        $totalpostDez = $postDez->count();
        $totalpost = Blog::whereYear('data', '=', 2020)->count();
        //Ir buscar os posts organizados por mes



        $post = Blog::paginate(10);
        $users = User::all();

        return view('paginas.backend.blog', compact([
            'totalpostJan',
            'totalpostFev',
            'totalpostMar',
            'totalpostAbr',
            'totalpostMai',
            'totalpostJun',
            'totalpostJul',
            'totalpostAgo',
            'totalpostSet',
            'totalpostOut',
            'totalpostNov',
            'totalpostDez',
            'totalpost',
            'post',
            'users'
        ]));
    }
    //backoffice blog

    public function inser_blog(Request $post)
    {
        Blog::create($post->all());
    }

    //backoffice blog functions such as insert, update and destroy

    // Insert

    public function inserir_blog()
    {
        $categories = Category::all();
        return view('paginas.backend.inser_blog', compact('categories'));

    }

    // Update

    public function editBlog(Blog $blog)
    {
        $categories = Category::all();
        $users = User::all();
        return view('paginas.backend.edit_blog', compact('categories', 'blog','users'));
    }


    public function showblog(Blog $blog)
    {
        $categories = Category::all();
        $users = User::all();
        return view('paginas.backend.show_blog', ['showBlog' => $blog], compact('blog','users','categories'));
    }
    // Destroy

    public function destroyBlog(Request $request, Blog $blog)
    {

    $blog->delete($blog);

    return redirect()->route('admin_blog')->with('success', 'Category successfully deleted', compact('blog'));

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function updateBlog(Request $request, Blog $blog)
    {

        $blog->update($request->all());

        return redirect()->route('admin_blog')
            ->with('success', 'Post was updated successfully', compact('blog'));
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
