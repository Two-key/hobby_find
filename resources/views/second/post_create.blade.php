    <head>
        <title>PostCreate - Hobby_Find</title>
    </head>
<x-app-layout>
    <body>
        <main class = "py-20 text-blue-950 bg-cyan-200 h-screen">
            <div class="text-3xl font-bold ml-12 mt-16">
                <button type="button" onclick="history.back()">戻る</button>
            </div>
        <h1 class="text-4xl font-bold underline ml-80 mt-8 pl-48">投稿を追加する</h1>
        <form action="/{{$group-> id}}/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="text-3xl font-bold ml-auto mt-8 text-center">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="◯◯会" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="text-3xl font-bold ml-auto mt-8 text-center">
                <h2>内容</h2>
                <textarea name="post[comment]" placeholder="今日は◯◯をしました！">{{ old('post.comment') }}</textarea>
                <p class="comment__error" style="color:red">{{ $errors->first('post.comment') }}</p>
            </div>
            <div class="text-2xl font-bold ml-auto mt-8 text-center">
                <input type="file" name="image">
            </div>
            <div class="text-3xl font-bold ml-auto mt-5 text-center">
                <input type="submit" value="保存"/>
            </div>
        </form>
        </main>
    </body>
</x-app-layout>