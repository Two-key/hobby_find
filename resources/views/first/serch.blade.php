<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>趣味を探す</h1>
        <form action="{{ route('group.serch') }}" method="GET">
            @csrf
            <div class="title">
                <h2>あなたの好きなことは何？</h2>
            </div>
                <h2>List</h2>
               <select name="category">
                   @foreach($categories as $category)
                   <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                   @endforeach
                   </select>
                   <button type="submit">検索</button>
        </form>
    <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>