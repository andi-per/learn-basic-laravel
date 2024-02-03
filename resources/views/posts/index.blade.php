@extends('layouts.app')

@section('title', 'Blog')

@section('content')
            <h1>Blog Andi
                <a href="{{ url("posts/create") }}" class="btn btn-success">+ Buat Postingan</a>
            </h1>
            @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <p class="card-text">
                        <small class="text-muted"> Last updated {{ date('d M Y H:i', strtotime($post->updated_at)) }} </small>
                    </p>
                    <a href="{{ url("posts/$post->id") }}" class="btn btn-primary">Selengkapnya</a>
                    <a href="{{ url("posts/$post->id/edit") }}" class="btn btn-warning">Ubah</a>
                </div>
            </div>
            @endforeach
@endsection
