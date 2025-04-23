@extends('categories.app')

@section('title', 'Category')

@section('content')
    <h1>Categories</h1>

    <a href="{{ route('categories.create') }}">+ New category</a>

    <ul>
        @foreach ($categories as $category)
            <li>
                {{ $category->name }}
                <a href="{{ route('categories.edit', $category->id) }}">✏️</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑️</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
