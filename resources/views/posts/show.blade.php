@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Post Info
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>ID : {{ $singlePost->id }}</p>
                    <p>Title : {{ $singlePost->title }}</p>
                    <p>Created At : {{ $singlePost->created_at->format('Y-m-d') }}</p>
                    <p>Description : {{ $singlePost->description }}</p>
                </blockquote>
            </div>
        </div>
    </div>
@endsection
