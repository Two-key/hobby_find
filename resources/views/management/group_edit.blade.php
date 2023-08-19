<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <form action="/groups" method="POST">
            @csrf
            <div class="title">
                <h2>グループ名</h2>
                <input type="text" name="group[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>作りたいグループの概要</h2>
                <textarea name="group[overview]" placeholder=
                "参加人数：◯人
                活動日：◯曜日
                場所：◯◯
                活動内容：◯◯な事をしています！"></textarea>
            </div>
            <div class="category">
                <h2>Category</h2>
                <select name="group[category_id]">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                    </select>
                    </div>
            <input type="submit" value="更新"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>