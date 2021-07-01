@extends('layouts.app')

@section('content')
<a href="{{ route('admin.index') }}">Torna alla home</a>
    <form action="{{ route('admin.store') }}" method="post">
        @csrf

        <label for="title">Titolo</label>
        <input type="text" name="title" id="title">

        <label for="content">Descrizione</label>
        <input type="text" name="content" id="content">

        <input type="submit" value="Invia">
    </form>
    {{-- <script src={{asset('js/app.js')}}></script> --}}

@endsection