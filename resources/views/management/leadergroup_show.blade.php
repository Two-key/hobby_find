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
        <main class = "py-20 text-blue-950">
           <div class="pl-40">
                <button type="button" onclick="history.back()" class="relative inline-block px-4 py-2 font-medium group">
                    <span class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                    <span class="absolute inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-black"></span>
                    <span class="relative text-black group-hover:text-white">戻る</span>
                </button>
            </div>
        <h1 class="text-2xl pr-20 text-right"><a href='/{{$group->id}}/post_create'>投稿を追加する</a></h3>
        <h1 class="text-6xl font-bold flex justify-center">
            {{ $group->title }}
        </h1>
        <div class="content">
            <h3 class="text-3xl font-bold pl-32 pt-10">グループの概要</h3>
            <div class="text-2xl pl-32 mt-5">
                <p>{{ $group->overview }}</p>    
            </div>
        </div>
        
        <h4 class="text-3xl font-bold flex justify-center pt-10"><a href="/groups/{{ $group->id }}/group_edit">グループプロフィールを変更する</a></h3>
        
          <div class='posts'>
              <h2 class='text-3xl font-bold pl-32 pt-10 border-solid border-b-2 border-orange-500'>過去の投稿</h2>
        
        <div class = "flex flex-row flex-wrap space-x-5 ml-32 pt-10">  
            @foreach ($posts as $post)
                <div class="block max-w-xs rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat">
                      <div class = "flex basis-auto right-0">  
                        <a href="/posts/{{ $post->id }}/post_edit"><button class = "bg-red-900 hover:bg-red-700 text-green-500 rounded w-10 h-10" type="button">編集</button></a>
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class = "bg-red-900 hover:bg-red-700 text-green-500 rounded w-10 h-10" type="button" onclick="deletePost({{ $post->id }})">削除</button> 
                        </form>
                        </div>
                        <img 
                            class="rounded-t-lg max-h-48"
                            src="{{ $post->image_url }}" 
                            alt="画像が読み込めません。" />
                    </div>
                    <div class="p-6">
                        <h2>{{ $post->title }}</h2>
                        <p class="text-base text-neutral-600 dark:text-neutral-200">
                          {{ $post->comment }}
                        </p>
                       
                    </div>
                </div>
                        </a>
            @endforeach
        </div>
        
        </main>
    </body>
</x-app-layout>
