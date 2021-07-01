@extends('layouts.app')

@section('content')
<a href="{{ route('admin.index') }}">Torna alla home</a>

    <ul>

        <li>ID: {{ $post->id }}</li>
        <li>TITOLO: {{ $post->title }}</li>
        <li>CONTENUTO: {{ $post->content }}</li>
    </ul>
    <script src={{asset('js/app.js')}}></script>

@endsection