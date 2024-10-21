@extends('layouts.app')
@section('content')
    {{-- Table of Posts --}}

        <a href="{{ route('posts.create') }}"><button class="btn btn-success mb-2">Create Post</button></a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted By</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key => $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user ? $post->user->name : "User Not Found" }}</td>
                        <td>{{ $post->created_at }}</td>
                        {{-- @dd($key->created_at->format('y-m-d')) --}}
                        <td>
                            <a href="{{ route('posts.show', $post -> id) }}"><button class="btn btn-primary">View</button></a>
                            <a href="{{ route('posts.edit', $post -> id) }}"><button class="btn btn-warning">Edit</button></a>
                            <form style="display: inline-block" action="{{ route('posts.destroy', $post -> id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger " type="submit" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection
