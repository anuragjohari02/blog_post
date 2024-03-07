<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return response()->json($posts);
    }

    public function show($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404);
        }
        return response()->json($post);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'publication_date' => 'required|date',
        ]);

        $post = Post::create($request->all());
        return response()->json($post, 201);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404);
        }

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'publication_date' => 'required|date',
        ]);

        $post->update($request->all());
        return response()->json($post, 200);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404);
        }
        $post->delete();
        return response()->json(null, 204);
    }
}
