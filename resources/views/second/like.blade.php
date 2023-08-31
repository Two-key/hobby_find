<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Likes</title>
        @vite('resources/css/app.css')
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
        <h1 class="text-4xl font-bold underline ml-80 mt-14 pb-10 pl-52">気になるグループ</h1>
        <h1 class="title">
            <div class='groups'>
            @foreach ($groups as $group)
                <div class='text-4xl font-bold ml-64 pl-64'>
                    <a href="/group_show/{{ $group->id }}">➣{{ $group->title }}</a>
                </div>
            @endforeach
            </div>
        </h1>
        </main>
        <footer class = "absolute h-24 bg-indigo-950 flex items-center w-full bottom-0">
            <p class= "text-green-500 mx-auto">hobby_find</p>
        </footer>
    </body>
</html>