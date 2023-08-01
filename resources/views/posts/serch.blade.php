<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>趣味を探す</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>あなたの好きなことは何？</h2>
            </div>
                <h2>List</h2>
                 <div class='categories'>
            @foreach ($categories as $category)
                <div class='category-name'>
                    <h2 class='title'>{{ $category->category_name }}</h2>
                </div>
            @endforeach
        </div>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>