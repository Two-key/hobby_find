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
        <h1>自分がつくったグループ</h1>
        <h1 class="title">
            <div class='groups'>
            @foreach ($groups as $group)
                <div class='title'>
                    <a href="/{{ $leader->id }}/">{{ $group->title }}</a>
                </div>
            @endforeach
        </div>
        </h1>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>