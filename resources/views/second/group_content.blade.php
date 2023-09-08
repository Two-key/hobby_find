    <head>
        <title>GroupContent - Hobby_Find</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('js/like.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <style>
        .liked {
            color: pink;
        }
        </style>
    </head>
<x-app-layout>
    <body>
        <h2 class ="pt-72 mt-80">
            <div
                class="bg-contain"
                style="background-image: url('https://res.cloudinary.com/dpbph7hyn/image/upload/v1694011725/treasure_gokzl8.svg'); height: 250px"></div>
            </div>
        </h2>
        <div
            class="absolute bottom-0 left-0 right-0 top-10 h-fit w-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 255, 0)">
        <main class = "pt-12 text-blue-950">
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
                    <i class="fas fa-heart like-toggle fa-2x" data-group-id="{{ $group->id }}"></i>
                </span>
                @else
                <span class="likes">
                    <i class="fas fa-heart heart like-toggle liked fa-2x" data-group-id="{{ $group->id }}"></i>
                </span>
                @endif
            @endauth
            @guest
                <span class="likes">
                    <i class="fas fa-heart heart"></i>
                </span>
            @endguest
            </h1>
            <h1 class='text-2xl pr-32 text-right'> 
            @if (!$user->isJoined($group->id))
            <form action="/{{$group->id}}/user_join" method="POST">
                @csrf
                <button class = "text-xs bg-indigo-950 hover:bg-indigo-700 text-yellow-400 rounded w-32 h-10" type="submit">仲間入りする</button>
            </form>
            @else
            <form action="/{{$group->id}}/user_join" method="POST">
                @csrf
                <button class = "text-xs bg-indigo-950 hover:bg-indigo-700 text-yellow-400 rounded w-44 h-10" type="submit">グループへの参加を取り消す</button>
            </form>
            @endif
            
            <button class = "text-xs bg-indigo-950 hover:bg-indigo-700 text-yellow-400 rounded w-32 h-10" type="submit" onclick="location.href='/group_talk/{{$group->id}}'">トークする</button>
            </h1>
            
            
            <h2 class="text-5xl font-bold flex justify-center underline decoration-yellow-400 underline-offset-8">
                {{ $group->title }}
            </h2>
            <div class="content">
                    <h3 class="text-3xl font-bold pl-32 pt-10">グループの概要</h3>
                    <div class="text-2xl pl-32 mt-5">
                        <p>{{ $group->overview }}</p>    
                    </div>
            </div>
            
            <div class='posts'>
                <h3 class='text-4xl font-bold pl-32 pt-10 border-solid border-b-2 border-yellow-400'>投稿一覧</h3>
       
            <div class = "flex basis-auto space-x-5 ml-32 pt-10">  
                @foreach ($posts as $post) 
                    <div class="block max-w-xs rounded-lg shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat">
                    <img 
                        class="rounded-t-lg max-h-48 aspect-auto"
                        src="{{ $post->image_url }}"
                        alt="画像を表示できません" />
                    </div>
                    <div class="p-6">
                        <p class="flex justify-center bg-white rounded border-2 border-yellow-400 font-bold text-base text-indigo-950 dark:text-indigo-950">
                           {{ $post->title }}
                        </p>
                        <p class="mb-4 text-base text-indigo-950 dark:text-neutral-200">
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
