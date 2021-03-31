@extends('layouts.default')
@section('title', 'Novo post')
@section('conteudo')
    <h1>Editar o post {{ $post->title }}</h1>
    @include('admin.posts._partials.form')
@endsection