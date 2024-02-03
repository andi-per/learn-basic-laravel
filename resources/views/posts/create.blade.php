@extends('layouts.app')
@section('title', 'Blog | Buat Postingan')


@section('content')
<h1>Buat Postingan Baru</h1>
<form action="{{ url("posts") }}" method="post" class="form-control">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="#Title">
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">Konten</label>
        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
