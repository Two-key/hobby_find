<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Index</title>
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
        <main class = "py-20 text-blue-950 bg-cyan-200 h-screen">
        <h2 class="text-3xl font-bold underline ml-96 mt-24">趣味を探す？楽しむ？仲間を集める？</h2>

                <h3 class='text-2xl ml-96 mt-11'><a href="/index/search">➣趣味を探す</a>
                
                <h3 class='text-2xl ml-96 mt-11'><a href="/group_join">➣趣味を楽しむ</a>
                
                <h3 class='text-2xl ml-96 mt-11'><a href="/index/create_group">➣仲間を集める</a>
                
                </h3>
        </main>
        <footer class = "absolute h-20 bg-indigo-950 flex items-center w-full bottom-0">
            <p class= "text-green-500 mx-auto">hobby_find</p>
        </footer>
    </body>
</html>