<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>趣味を探す？楽しむ？仲間を集める？</h1>

                <h2 class='title'><a href="/index/serch">趣味を探す</a>
                
                <h2 class='title'><a href="/group_join">趣味を楽しむ</a>
                
                <h2 class='title'><a href="/index/create_group">仲間を集める</a>
                
                <h2 class='title'><a href="{{leader}}/leader_create">自分で作ったグループ</a>
                </h2>
    </body>
</html>