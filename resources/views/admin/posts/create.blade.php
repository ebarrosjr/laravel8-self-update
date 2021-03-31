@extends('layouts.default')
@section('title', 'Novo post')
@section('conteudo')
    <h1>Novo post</h1>
    @include('admin.posts._partials.form')    
@endsection
