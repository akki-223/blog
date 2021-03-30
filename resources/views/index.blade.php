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
                   <h2 class='title'><a href="/posts/{{ $post->id}}">{{ $post->title }}</a></h2>
                   <p class='body'>{{ $post->body }}</p>
               </div>
               <form action='/posts/{{ $post->id }}' id='form_delete' method='POST' style='display:inline'>
                @csrf
                @method('DELETE')
                 <input type='submit' style='display:none'></button>
                 <p class='delete'>[<span onclick='return deletePost(this);'>delete</span>]</p>
               </form>
              @endforeach
        　　</div>
        　　<div class='paginate'>
        　　     {{ $posts->links() }}
        　　</div>
        　　<div>
        　　  <a href='/posts/create'>create</a>
        　　</div>
        　　<script>
                 function deletePost(e){
                     if(confirm('削除していいですか')){
                         document.getElementById('form_delete').submit();
                     }
                 }
            </script>
        </main>
    </body>
</html>
