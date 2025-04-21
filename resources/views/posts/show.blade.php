@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">{{ $post->title }}</h3>
                </div>
                <div class="card-body p-4">
                    <p class="mb-0" style="white-space: pre-line;">{{ $post->body }}</p>
                </div>
                <div class="card-footer bg-light border-top-0">
                    <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">
                        &#8592; Back
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
