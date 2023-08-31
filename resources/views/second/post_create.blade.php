<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>PostCreate</title>
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
        <h1 class="text-4xl font-bold underline ml-80 mt-8 pl-48">投稿を追加する</h1>
        <form action="/{{$group-> id}}/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="text-3xl font-bold ml-auto mt-8 text-center">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="◯◯会" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="text-3xl font-bold ml-auto mt-8 text-center">
                <h2>内容</h2>
                <textarea name="post[comment]" placeholder="今日は◯◯をしました！">{{ old('post.comment') }}</textarea>
                <p class="comment__error" style="color:red">{{ $errors->first('post.comment') }}</p>
            </div>
            <div class="text-2xl font-bold ml-auto mt-8 text-center">
                <input type="file" name="image">
            </div>
            <div class="text-3xl font-bold ml-auto mt-5 text-center">
                <input type="submit" value="保存"/>
            </div>
        </form>
        </main>
    </body>
</html>