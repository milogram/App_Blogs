@extends('layouts.app')

@section('content')
<h1>Crear nuevo post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label>Título:</label><br>
    <input type="text" name="title" value="{{ old('title') }}"><br>

    <label>Contenido:</label><br>
    <textarea name="content">{{ old('content') }}</textarea><br>

    <button type="submit">Guardar</button>
</form>

<a href="{{ route('posts.index') }}">Volver</a>
@endsection