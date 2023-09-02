    <head>
        <title>GroupContent - Hobby_Find</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('js/like.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
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
            <h1 class='text-2xl pr-20 text-right'> 
            @auth
                @if (!$group->isLikedBy(Auth::user())) 
                <span class="likes">
                    <i class="fas fa-heart like-toggle" data-group-id="{{ $group->id }}"></i>
                </span>
                @else
                <span class="likes">
                    <i class="fas fa-heart heart like-toggle liked" data-group-id="{{ $group->id }}"></i>
                </span>
                @endif
            @endauth
            @guest
                <span class="likes">
                    <i class="fas fa-heart heart"></i>
                </span>
            @endguest
            
            @if (!$user->isJoined($group->id))
            <form action="/{{$group->id}}/user_join" method="POST">
                @csrf
                <input type="submit" value="仲間入りする"/>
            </form>
            @else
            <form action="/{{$group->id}}/user_join" method="POST">
                @csrf
                <input type="submit" value="グループへの参加を取り消す"/>
            </form>
            @endif
            </h1>
            <div class="text-2xl pr-20 text-right"><a href='/{{$group->id}}/group_talk'>トークする</a></div>
            <h2 class="text-6xl font-bold ml-64 pl-64">
                {{ $group->title }}
            </h2>
            <div class="content">
                    <h3 class="text-3xl font-bold pl-64 pt-10">グループの概要</h3>
                    <div class="text-2xl pl-64 mt-5">
                        <p>{{ $group->overview }}</p>    
                    </div>
            </div>
            
            <div class='posts'>
                <h3 class='text-4xl font-bold pl-64 pt-10 border-solid border-b-2 border-orange-500'>投稿一覧</h3>
                @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='text-4xl font-bold ml-72 pl-72 pt-10'>{{ $post->title }}</h2>
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
