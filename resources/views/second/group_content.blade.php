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
        <main class = "py-20 text-blue-950">
            <div class="pl-40">
                <button type="button" onclick="history.back()" class="relative inline-block px-4 py-2 font-medium group">
                    <span class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                    <span class="absolute inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-black"></span>
                    <span class="relative text-black group-hover:text-white">戻る</span>
                </button>
            </div>
            <h1 class='text-2xl pr-32 text-right'> 
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
            <div class="text-2xl pr-32 text-right"><a href='/{{$group->id}}/group_talk'>トークする</a></div>
            <h2 class="text-6xl font-bold flex justify-center">
                {{ $group->title }}
            </h2>
            <div class="content">
                    <h3 class="text-3xl font-bold pl-32 pt-10">グループの概要</h3>
                    <div class="text-2xl pl-32 mt-5">
                        <p>{{ $group->overview }}</p>    
                    </div>
            </div>
            
            <div class='posts'>
                <h3 class='text-4xl font-bold pl-32 pt-10 border-solid border-b-2 border-orange-500'>投稿一覧</h3>
       
            <div class = "flex basis-auto space-x-5 ml-32 pt-10">  
                @foreach ($posts as $post) 
                    <div class="block max-w-[18rem] rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat">
                    <img 
                        class="rounded-t-lg"
                        src="{{ $post->image_url }}"
                        alt="Skyscrapers" />
                    </div>
                    <div class="p-6">
                        <p class="text-base text-neutral-600 dark:text-neutral-200">
                           {{ $post->title }}
                        </p>
                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
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
