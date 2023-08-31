<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Leadergroup</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('js/like.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
        function deletePost(id) {
            'use strict'
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
        </script>
        <style>
        .liked {
            color: pink;
        }
        </style>
    </head>
    <body>
        <header class = "fixed top-0 left-0 right-0 bg-indigo-950">
            <div class = "flex items-center justify-between">
                <h1 class = "mx-2 text-4xl text-green-500 decoration-orange-50 font-bold"><a href="/">HOBBY-FIND</a></h1>
                <nav class="header-nav-item">
                    <ul class="flex mx-10 block text-green-500 h-20 leading-10 mt-px">
                        <li class="text-2xl mt-6 mr-5"><a class="like-group" href="/index/like">気になる</a></li>
                        <li class="text-2xl mt-6 mr-2"><a class="my-create-group" href="/index/leader_create">マイグループ</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class = "py-20 text-blue-950 bg-cyan-200 h-full">
            <div class="text-3xl font-bold ml-12 mt-16">
                <button type="button" onclick="history.back()">戻る</button>
            </div>
        <h1 class="text-2xl pr-20 text-right"><a href='/{{$group->id}}/post_create'>投稿を追加する</a></h3>
        <h1 class="text-6xl font-bold ml-64 pl-64">
            {{ $group->title }}
        </h1>
        <div class="content">
            <h3 class="text-3xl font-bold pl-64 pt-10">グループの概要</h3>
            <div class="text-2xl pl-64 mt-5">
                <p>{{ $group->overview }}</p>    
            </div>
        </div>
        
        <h4 class="text-3xl font-bold ml-60 pl-60 mr-0 pt-10"><a href="/groups/{{ $group->id }}/group_edit">タイトルや概要を変更する</a></h3>
        
        
        
          <div class='posts'>
              <h2 class='text-3xl font-bold pl-64 pt-10 border-solid border-b-2 border-orange-500'>過去の投稿</h2>
                @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='text-3xl font-bold ml-72 pl-64 pt-10'>{{ $post->title }}</h2>
                    <div class="text-2xl pr-20 text-right"><a href="/posts/{{ $post->id }}/post_edit">投稿を編集する</a></div>
                    <div class='text-2xl pr-20 text-right'>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">投稿を削除する</button> 
                    </form>
                    </div>
                    <p class='text-2xl pl-64 mt-5'>{{ $post->comment }}</p>
                    <div class='text-2xl pl-64 mt-5'>
                        <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
                    </div>
                </div>
            @endforeach
             <div class='paginate'>
        </div>
        </div>
        </main>
    </body>
</html>
