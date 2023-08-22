<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>PostCreate</title>
    </head>
    <body>
        <h1></h1>
        <form action="/{{$group-> id}}/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[comment]" placeholder="今日も1日お疲れさまでした。">{{ old('post.comment') }}</textarea>
                <p class="comment__error" style="color:red">{{ $errors->first('post.comment') }}</p>
            </div>
             <!-- ここから追加 -->
            <div class="image">
                <input type="file" name="image">
            </div>
            <!-- ここまで追加 -->
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>