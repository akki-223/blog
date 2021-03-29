<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>article</title>

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
        　　<div class='article'>
        　　  <div class='article_title'>
        　　     <h2 class='title'>
        　　        {{$post->title }}
               </h2>
              </div>
              <div class='article_body'>
                 <p class='body'>{{ $post->body }}</p>
              </div>
              <div>
                  <p class='edit'><a href='/posts/{{$post->id}}/edit'>edit</p>
                  <a href='/'>Article list</a>
              </div>       
            </div>
        </main>
    </body>
</html>
