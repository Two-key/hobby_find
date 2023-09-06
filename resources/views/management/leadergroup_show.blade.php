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
        <h2 class ="pt-80 mt-80">
            <div
                class="bg-contain"
                style="background-image: url('https://res.cloudinary.com/dpbph7hyn/image/upload/v1694011725/treasure_gokzl8.svg'); height: 250px"></div>
            </div>
        </h2>
        <div
            class="absolute bottom-0 left-0 right-0 top-10 h-fit w-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 255, 0)">
        <main class = "pt-20 text-blue-950">
           <div class="pl-40">
                <button type="button" onclick="history.back()" class="relative inline-block px-4 py-2 font-medium group">
                    <span class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                    <span class="absolute inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-black"></span>
                    <span class="relative text-black group-hover:text-white">戻る</span>
                </button>
            </div>
        <h1 class="text-2xl pr-20 text-right">
            <button class = "text-xs bg-indigo-950 hover:bg-indigo-700 text-yellow-400 rounded w-32 h-10" type="submit" onclick="location.href='/{{$group->id}}/post_create'">投稿を追加する</button>
        </h1>
        <h1 class="text-6xl font-bold flex justify-center underline decoration-yellow-400 underline-offset-8">
            {{ $group->title }}
        </h1>
        <div class="content">
            <h3 class="text-3xl font-bold pl-32 pt-10">グループの概要</h3>
            <div class="text-2xl pl-32 mt-5">
                <p>{{ $group->overview }}</p>    
            </div>
        </div>
        <h1 class="flex justify-center">
        <button
          type="button"
          class="px-7 pb-2.5 pt-3 text-sm inline-block rounded border-2 border-red-500 px-6 pb-[6px] pt-2 font-medium uppercase leading-normal text-red-500 transition duration-150 ease-in-out hover:border-red-300 hover:bg-indigo-700 hover:bg-opacity-10 hover:text-red-300 focus:border-red-500 focus:text-red-300 focus:outline-none focus:ring-0 active:border-red-300 active:text-red-300 dark:hover:bg-indigo-700 dark:hover:bg-opacity-10"
          onclick="location.href='/groups/{{ $group->id }}/group_edit'"
          data-te-ripple-init>
          グループプロフィールを変更する
        </button>
        </h1>
        
          <div class='posts'>
              <h2 class='text-3xl font-bold pl-32 pt-10 border-solid border-b-2 border-yellow-400'>過去の投稿</h2>
        
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
                            class="rounded-t-lg max-h-48 aspect-auto"
                            src="{{ $post->image_url }}" 
                            alt="画像が読み込めません。" />
                    </div>
                    <div class="p-6">
                        <h2 class="flex justify-center bg-white rounded border-2 border-yellow-400 font-bold text-base text-indigo-950 dark:text-indigo-950">{{ $post->title }}</h2>
                        <p class="text-base text-neutral-600 dark:text-neutral-200">
                          {{ $post->comment }}
                        </p>
                       
                    </div>
                </div>
                        </a>
            @endforeach
        </div>
        </main>
        </div> 
    </body>
</x-app-layout>
