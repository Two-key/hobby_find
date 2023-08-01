<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/groups" method="POST">
            @csrf
            <div class="title">
                <h2>グループ名</h2>
                <input type="text" name="group[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>作りたいグループの概要</h2>
                <textarea name="group[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>