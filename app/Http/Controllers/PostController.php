<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\GravaPost;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::paginate(3);

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(GravaPost $request)
    {
        /*
        Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);
        */
        if(isset($request->id)) {
            $post = Post::find($request->id);
            $post->update($request->all());
        } else {
            Post::create($request->all());
        }

        return redirect()->route('posts.index')->with('message', 'Registro atualizado com sucesso');
    }

    public function show($id)
    {
        // $post = Post::where('id', $id)->first();
        if(!$post = Post::find($id)) {
            // return redirect()->route('e404');
            return redirect()->route('posts.index');
        }

        return view('admin.posts.show', compact('post'));
    }

    public function edit($id)
    {
        // $post = Post::where('id', $id)->first();
        if(!$post = Post::find($id)) {
            // return redirect()->route('e404');
            return redirect()->back();
        }

        return view('admin.posts.edit', compact('post'));
    }

    public function destroy($id)
    {
        if(!$post = Post::find($id)) {
            // return redirect()->route('e404');
            return redirect()->route('posts.index');
        }        
        $post->delete();

        return redirect()->route('posts.index')->with('message', 'post deletado com sucesso!');
    }
}
