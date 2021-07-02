@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="post">
                    <a href="{{route("admin.create")}}">Crea un post</a>
                    {{-- @dump($posts) --}}
                        @foreach($posts as $post)
                            <h1>Titolo: {{$post->title}}</h1>
                            <p>Contenuto: {{$post->content}}</p>
                            <p>Autore: {{$post->user->name}}</p>
                            <p>Categoria :{{ $post->category ? $post->category->name : 'none' }}</p>
                            @auth
                                @include('partials/deleteBtn',["id" => $post->id])
                                <button type="button" class="btn btn-primary"><a class="text-light" href="{{ route('admin.edit', $post->id) }}">Modifica</a></button>
                                <button type="button" class="btn btn-primary"><a class="text-light" href="{{ route('admin.show', $post->id) }}">Visualizza post</a></button>
                            @endauth
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
