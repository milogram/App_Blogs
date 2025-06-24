@extends('layouts.app')

@section('content')
<h1>Posts</h1>

<a href="{{ route('posts.create') }}">Crear nuevo post</a>

@if(session('success'))
<p style="color: green">{{ session('success') }}</p>
@endif

<ul>
    @foreach($posts as $post)
    <li>
        <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        <a href="{{ route('posts.edit', $post) }}">Editar</a>

        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('¿Eliminar este post?')">Eliminar</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection