<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script>
        function deleteGroup(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
        }
        </script>
    </head>
    <body>
        <h1>自分がつくったグループ</h1>
        <h1 class="title">
            <div class='groups'>
            @foreach ($groups as $group)
                <div class='title'>
                    <a href="/{{ $leader->id }}/">{{ $group->title }}</a>
                </div>
                <form action="/groups/{{ $group->id }}" id="form_{{ $group->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deleteGroup({{ $group->id }})">グループを削除する</button> 
        </form>
            @endforeach
        </div>
        </h1>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>