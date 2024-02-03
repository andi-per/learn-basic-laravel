<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Ubah Postingan</title>
    <link
            href="{{ asset('bootstrap-5/css/bootstrap.min.css') }} "
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />
    <script
            src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }} "
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
    ></script>
</head>
<body>
    <h1>Ubah Postingan</h1>
    <form action="{{ url("posts/$post->id") }}" method="post" class="form-control">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="#Title" value="{{$post->title}}">
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <form action="{{ url("posts/{$post->id}") }}" method="post">
    @method('DELETE')
    @csrf
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>

</body>
</html>
