@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0 text-primary">All Posts</h3>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Create New Post
        </a>
    </div>

    @forelse ($posts as $post)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ Str::limit($post->body, 100) }}</p>

                <div class="d-flex gap-2">
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-outline-info">
                        <i class="bi bi-eye"></i> View
                    </a>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-outline-warning">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Are you sure?')" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-info">No posts available.</div>
    @endforelse
</div>
@endsection
