@extends('layouts.default')
@section('title', 'Novo post')
@section('conteudo')
    <a href="{{ route('posts.index') }}">Listagem</a>
    <hr />
    <h1>{{ $post->title }}</h1>
    <p><small>{{ $post->created_at }}</small></p>
    <hr />
    <img src="{{ url("storage/{$post->image}") }}" alt="arquivo">
    <hr />
    <p>{{ $post->body }}</p>
@endsection