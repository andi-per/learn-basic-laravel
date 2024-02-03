<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
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
        @include('layouts.app.header')


        <div class="container">

            @yield('content')

            @include('layouts.app.footer')
          </div>
    </body>
</html>
