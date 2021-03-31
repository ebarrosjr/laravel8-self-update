@extends('layouts.default')
@section('title', 'Novo post')
@section('conteudo')
    <a href="{{ route('posts.create') }}"> Novo Post </a>
    <hr />
    @if (session('message'))
        <div class="alert">
            {{ session('message') }}
        </div>
        <hr />
    @endif
    <h1>Index dos Posts</h1>
    @foreach ($posts as $post)
        <h2>
            {{ $post->title }}  
            [ <a href="{{ route('posts.show', $post->id) }}"> VER </a>] 
            [ <a href="{{ route('posts.update', $post->id) }}"> editar </a>] 
            <form action="{{ route('posts.delete', $post->id) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit"> apagar</button>
            </form>
        </h2>
    @endforeach

    <hr>
    {{ $posts->links() }}
@endsection