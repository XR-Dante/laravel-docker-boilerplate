@extends('categories.app')

@section('title', 'Category edit')

@section('content')
    <h1>Category edit</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ old('name', $category->name) }}">
        <button type="submit">Save</button>
    </form>

    <a href="{{ route('categories.index') }}">⬅️ Back</a>
@endsection
