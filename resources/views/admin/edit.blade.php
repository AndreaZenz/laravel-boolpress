@extends('layouts.app')

@section('content')
@include("partials.errorsAlert")

<form action="{{ route('admin.update', $post->id) }}" method="post">
    @csrf

    @method('PATCH')

    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ $post->title}}">

    <label for="content">content</label>
    <input type="content" name="content" id="content" value="{{ $post->content }}">

    <input type="submit" value="Salva">
</form>

<script src={{asset('js/app.js')}}></script>

@endsection
