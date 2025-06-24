@extends('layouts.app')

@section('content')
<h1>Editar post</h1>

<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Título:</label><br>
    <input type="text" name="title" value="{{ old('title', $post->title) }}"><br>

    <label>Contenido:</label><br>
    <textarea name="content">{{ old('content', $post->content) }}</textarea><br>

    <button type="submit">Actualizar</button>
</form>

<a href="{{ route('posts.index') }}">Volver</a>
@endsection