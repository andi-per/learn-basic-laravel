@extends('layouts.app')
@section('title', "Blog | $post->title")

@section('content')
    <div class="container">
        <article class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ date('d M Y H:i', strtotime($post->updated_at)) }}</p>

            <p>{{ $post->content }}</p>

            <small class="text-muted">{{ $total_comments }} Komentar</small>
            @foreach ($comments as $comment)
            <div class="mb-3 card">
                <div class="card-body">
                    <p style="font-size:12px">{{ $comment->comment }}</p>
                </div>
            </div>

            @endforeach
          </article>
          <a href="{{ url("posts") }}">Kembali</a>
    </div>
@endsection
