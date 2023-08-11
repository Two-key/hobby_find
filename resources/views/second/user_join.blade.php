<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>仲間入りしたグループ</h1>
        <h1 class="title">
            <div class='groups'>
            @foreach ($joins as $join)
                <div class='title'>
                    <a href="/group_content/{{ $join->id }}">{{ $join->title }}</a>
                </div>
            @endforeach
        </div>
        </h1>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>