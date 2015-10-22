<?php

namespace Infinety\Http\Controllers;

use Illuminate\Http\Request;

use Infinety\Http\Requests;
use Infinety\Http\Controllers\Controller;
use Infinety\Posts;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Posts::where('status', '=', 1)->orderBy('created_at', 'desc')->paginate(8);
        return view('blog', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($title)
    {
        $post = Posts::where('title', $title)->first();
        return view('blog-item', compact('post'));
    }

}
