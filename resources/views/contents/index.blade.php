<!-- resources/views/contents/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Contents list</h2>
        <a href="{{ route('contents.create') }}" class="btn btn-primary">Create new content</a>
        <table class="table mt-3">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>URL</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($contents as $content)
                <tr>
                    <td>{{ $content->id }}</td>
                    <td>{{ $content->title }}</td>
                    <td>{{ $content->url }}</td>
                    <td>{{$content->authors->pluck('name')->join(',')}}</td>
{{--                    @foreach ($content->authors as $author)--}}
{{--                        <td>{{ $author->name }}</td>--}}
{{--                    @endforeach--}}
                    <td>
                        <a href="{{ route('contents.edit', $content->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('contents.destroy', $content->id) }}" method="POST" style="display:inline;">
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
