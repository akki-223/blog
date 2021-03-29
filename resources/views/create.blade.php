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
                <h1>投稿</h1>
            </div>
        </header>
        <main>
            <form action='/posts' method='POST'>
            @csrf
                <div class='post_title'>
                  <input type='text' name='post[title]' value='{{old('post.title')}}'/>
                  <p class='title_error' style='color:red'>
                      {{$errors->first('post.title')}}
                  </p>
                </div>
                <div class='post_body'>
                  <textarea name='post[body]'>{{old('post.body')}}</textarea>
                  <P class='body_error' style='color:red'>
                      {{$errors->first('post.body')}}
                  </P>
                </div>
                <input type='submit' value='保存'/>
            </form>
            <div>
                <a href='/'>article list</a>
            </div>
        </main>
    </body>
</html>
