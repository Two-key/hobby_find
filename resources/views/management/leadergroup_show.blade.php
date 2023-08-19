<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Leadergroup</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <script src="{{ asset('js/like.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <script src="https://cdn.tailwindcss.com"></script>
        <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="固有のコード" crossorigin="anonymous">-->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .liked {
                color: pink;
                    }

        </style>
    </head>
    <body>
        <h1 class="title">
            {{ $group->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>グループの概要</h3>
                <p>{{ $group->overview }}</p>    
            </div>
        </div>
        
        <p><div class="group_edit"><a href="/groups/{{ $group->id }}/group_edit">タイトルや概要を変更する</a></div></p>
        
        <p><a href='/{{$group->id}}/post_create'>投稿を追加する</a></p>
        
          <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->comment }}</p>
                    <div>
                        <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
                    </div>
                    <div class="post_edit"><a href="/posts/{{ $post->id }}/post_edit">投稿を編集する</a></div>
                </div>
            @endforeach
             <div class='paginate'>
        </div>
        </div>
        
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
