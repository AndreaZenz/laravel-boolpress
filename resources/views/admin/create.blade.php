@extends('layouts.app')

@section('content')
<a href="{{ route('admin.index') }}">Torna alla home</a>
<form action="{{ route('admin.store') }}" method="post">
    @csrf

    <label for="title">Titolo</label>
    <input type="text" name="title" id="title">

    <label for="content">Descrizione</label>
    <input type="text" name="content" id="content">

    <div class="form-group">
        <label>Categoria</label>
        <select name="category_id" class="form-control  @error('category_id') is-invalid @enderror">
            <option value="">-- seleziona categoria --</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == old('category_id', '') ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
        @error('category_id')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <input type="submit" value="Invia">
</form>
{{-- <script src={{asset('js/app.js')}}></script> --}}

@endsection
