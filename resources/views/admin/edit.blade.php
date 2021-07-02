@extends('layouts.app')

@section('content')
@include("partials.errorsAlert")

<div class="container">
    <form action="{{ route('admin.update', $post->id) }}" method="post">
        @csrf

        @method('PATCH')

        <div>
            <label style="width:100px" for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $post->title}}">
        </div>
        <div>
            <label style="width:100px" for="content">Content</label>
            <textarea type="content" name="content" id="content" value="{{ $post->content }}" cols="30" rows="10"></textarea>
        </div>

        <input type="submit" value="Salva">
    </form>
</div>

<script src={{asset('js/app.js')}}></script>

@endsection
