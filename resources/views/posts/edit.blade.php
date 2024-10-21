@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.update', $singlePost->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="post-title" class="form-label">Post Title</label>
            <input type="text" name="title" class="form-control" id="" value="{{ $singlePost->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="" rows="5">{{ $singlePost->description }}</textarea>
        </div>
        <div class="form-group">
            <label>User</label>
            <select class="form-control" name="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user ? $user->id : ' ' }}" @if ($user->id == $singlePost->user_id) selected @endif>
                        {{ $user ? $user->name : '' }}</option>
                @endforeach

            </select>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">

            <button type="submit" class="btn btn-success btn-lg">Update Post</button>
        </div>
    </form>
@endsection
