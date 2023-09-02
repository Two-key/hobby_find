    <head>
        <title>Leadergroup - Hobby_Find</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
<x-app-layout>
    <body>
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
        </div>
        </main>
    </body>
</x-app-layout>
