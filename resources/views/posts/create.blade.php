@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label for="post-title" class="form-label">Post Title</label>
            <input type="text" name="title" class="form-control" id="" placeholder="Post Title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label>Users</label>
            <select class="form-control" name="user_id">
                @foreach ($users as $user)
                    <option value="{{$user ? $user->id : " "}}">{{ $user ? $user->name : '' }}</option>
                @endforeach
            </select>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-success btn-lg">Create</button>
        </div>
    </form>
@endsection
