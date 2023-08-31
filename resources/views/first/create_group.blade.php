<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>CreateGroup</title>
        @vite('resources/css/app.css')
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
            <div class="text-3xl font-bold ml-12 mt-16">
                <button type="button" onclick="history.back()">戻る</button>
            </div>
        <form action="/groups" method="POST">
            @csrf
            <div class="text-3xl font-bold ml-auto text-center">
                <h2>グループ名</h2>
                <input type="text" name="group[title]" placeholder="タイトル"/>
            </div>
            <div class="text-3xl font-bold ml-auto mt-8 text-center">
                <h2>作りたいグループの概要</h2>
                <textarea name="group[overview]" placeholder=
                "参加人数：◯人
                    活動日：◯曜日
                    場所：◯◯
                    活動内容：◯◯な事をしています！"></textarea>
            </div>
            <div class="text-3xl font-bold ml-auto mt-10 text-center">
                <h2>Category</h2>
                <select name="group[category_id]">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                    </select>
            </div>
            <div class="text-3xl font-bold ml-auto mt-5 text-center">
            <input type="submit" value="作成"/>
            </div>
        </form>
       </main>
        <footer class = "absolute h-24 bg-indigo-950 flex items-center w-full fixed">
            <p class= "text-green-500 mx-auto">hobby_find</p>
        </footer>
    </body>
</html>