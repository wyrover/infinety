<?php

namespace Infinety\Http\Controllers;

use Illuminate\Http\Request;

use Infinety\Http\Requests;
use Infinety\Http\Controllers\Controller;
use Infinety\Posts;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Posts::paginate(10);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        Posts::create($request->except('_token'));
        flash()->success('Post Created', 'Post successfully created');
        return redirect('admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Posts::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $post = Posts::find($id);
        $post->title = $request->input('title');
        $post->category = $request->input('category');
        $post->content = $request->input('content');
        $post->update();

        flash()->success('Updated', 'Post updated');
        return redirect('/admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Posts::find($id)->delete();
        flash()->success('Deleted', 'Post deleted');
        return redirect('/admin/posts');
    }
}
