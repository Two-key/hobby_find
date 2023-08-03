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
        <h1>{{ $category->category_name }}が好きな人の集まり</h1>
        <h1 class="title">
            <div class='groups'>
            @foreach ($category->groups as $group)
                <div class='title'>
                    <a href="/group_show/{{ $group->id }}">{{ $group->title }}</a>
                </div>
            @endforeach
        </div>
        </h1>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>