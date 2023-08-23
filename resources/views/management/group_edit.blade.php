<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <form action="/groups/{{ $group->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>グループタイトル</h2>
                <input type='text' name='group[title]' value="{{ $group->title }}">
            </div>
            <div class='content__body'>
                <h2>グループ概要</h2>
                <input type='text' name='group[overview]' value="{{ $group->overview }}">
            </div>
            <div>
                <h2>Category</h2>
                <select name="group[category_id]">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                    </select>
            </div>
            <input type="submit" value="更新">
        </form>
            
        <div class="footer">
      <button type="button" onclick="history.back()">戻る</button>
        </div>
    </body>
</html>