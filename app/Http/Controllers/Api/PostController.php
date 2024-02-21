<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'summary' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|string',
            'tags' => 'required|array',
        ]);
        $post = new Post;
        $post->title = $data['title'];
        $post->summary = $data['summary'];
        $post->content = $data['content'];
        $post->thumbnail = 'thumbnail';
        $post->category_id = $data['category_id'];
        $post->save();
        $post->post_tags()->createMany($data['tags']);

        return $post;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Post::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
