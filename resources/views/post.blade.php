@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-md-8 bg-primary text-white p-4 rounded">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <p>
                By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none text-white">
                    {{ $post->author->name }}
                </a>
                in
                <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">
                    {{ $post->category->name }}
                </a>
            </p>

            @if ($post->image)
                <div>
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            @endif

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/posts" class="d-block mt-3 text-dark">Back to posts</a>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
@endsection
{{-- //style="max-height: 350px; overflow:hidden;" --}}



