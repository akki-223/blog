<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>my blog</title>

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">-->


    </head>
    <body>
        <header>
            <div>
                <h1>blog name</h1>
            </div>
        </header>
        <main>
        　　<div class='posts'>
        　　    @foreach($posts as $post)
               <div class='post'>
                   <h2 class='title'>{{ $post->title }}</h2>
                   <p class='body'>{{ $post->body }}</p>
               </div>
              @endforeach
        　　</div>
        　　<div class='paginate'>
        　　     {{ $posts->links() }}
        　　</div>
        </main>
    </body>
</html>
