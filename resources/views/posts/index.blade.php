<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1 class="ttl">Blog</h1>
        @foreach ($posts as $post)
        <div class="posts">
            <div class="post">
                <h2 class="post-ttl">{{$post->title}}</h2>
                <p class="post-body">{{$post->body}}</p>
            </div>
        </div>
        @endforeach
        
        <div class="paginate">
            {{ $posts->links("vendor.pagination.default") }}
        </div>
    </body>
</html>
