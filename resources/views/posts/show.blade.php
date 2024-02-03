<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | {{ $post->title }}</title>
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
    <link
    href="{{ asset('bootstrap-5/css/bootstrap.min.css') }} "
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous" />
    <script
    src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }} "
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</head>
<body>
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
</body>
</html>
