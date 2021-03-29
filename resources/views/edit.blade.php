<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>post</title>

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">-->


    </head>
    <body>
        <header>
            <div>
                <h1>投稿編集</h1>
            </div>
        </header>
        <main>
            <form action='/posts/{{$post->id}}' method='POST'>
            @csrf
            @method('PUT')
                <div class='edit_title'>
                  <input type='text' name='post[title]' value='{{$post->title }}'/>
                </div>
                <div class='edit_body'>
                  <textarea name='post[body]'>{{$post->body}}</textarea>
                </div>
                <input type='submit' value='保存'/>
            </form>
            <div>
                <a href='/'>article list</a>
            </div>
        </main>
    </body>
</html>
