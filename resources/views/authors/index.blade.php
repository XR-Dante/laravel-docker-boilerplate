<!-- resources/views/authors/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Authors list</h2>
        <a href="{{ route('authors.create') }}" class="btn btn-primary">Create new author</a>
        <table class="table mt-3">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>URL</th>
                <th>Amallar</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->url }}</td>
                    <td>
                        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
