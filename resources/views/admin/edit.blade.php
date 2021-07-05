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
            <textarea type="content" name="content" id="content" value="{{ $post->content }}" cols="30" rows="10">{{$post->content}}</textarea>
        </div>

        <div class="form-group">
            <label>Categoria</label>
            <select name="category_id" class="form-control  @error('category_id') is-invalid @enderror">
                <option value="">-- seleziona categoria --</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>
                    {{ $category->name }}

                </option>
                @endforeach
            </select>
            @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Tags</label><br>

            @foreach($tags as $tag)

            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input name="tags[]" class="form-check-input" type="checkbox" value="{{ $tag->id }}" {{ $post->tags->contains($tag) ? 'checked' : '' }}>

                    {{ $tag->name }}
                </label>
            </div>

            @endforeach

        </div>
        <div class="form-group">
            <label>Tags</label><br>

            @foreach($tags as $tag)

            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input name="tags[]" class="form-check-input" type="checkbox" value="{{ $tag->id }}">
                    {{ $tag->name }}
                </label>
            </div>

            @endforeach

        </div>


        <input type="submit" value="Salva">
    </form>
</div>

<script src={{asset('js/app.js')}}></script>

@endsection
