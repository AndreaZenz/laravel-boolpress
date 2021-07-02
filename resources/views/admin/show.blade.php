@extends('layouts.app')

@section('content')
<a href="{{ route('admin.index') }}">Torna alla home</a>

<ul>

    <li>ID: {{ $post->id }}</li>
    <li>TITOLO: {{ $post->title }}</li>
    <li>CONTENUTO: {{ $post->content }}</li>
    <li>UTENTE: {{ $user->name }} </li>
    <li>Categoria: {{ $post->category ? $post->category->name : 'none' }}</li>
    <button type="button" class="btn btn-primary"><a class="text-light" href="{{ route('admin.edit', $post->id) }}">Modifica</a></button>
    @include('partials/deleteBtn',["id" => $post->id])
</ul>
<script src={{asset('js/app.js')}}></script>

@endsection
