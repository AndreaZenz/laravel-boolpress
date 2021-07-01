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
                            <h1>{{$post->title}}</h1>
                            <p>{{$post->content}}</p>
                            @auth
                                @include('partials/deleteBtn',["id" => $post->id])
                            @endauth
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
