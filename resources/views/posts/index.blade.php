<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Blog</title>
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
        <style>
            .blog {
                padding: 5px;
                border-bottom: 1px solid lightgrey;
            }
            small {
                color: gray;
            }
        </style>
    </head>
    <body>
        <div class="container">
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
        </div>
    </body>
</html>
