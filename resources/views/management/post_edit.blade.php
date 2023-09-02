    <head>
        <title>PostEdit - Hobby_Find</title>
    </head>
<x-app-layout>
<body>
    <main class = "py-20 text-blue-950 bg-cyan-200 h-screen">
        <div class="text-3xl font-bold ml-12 mt-10">
            <button type="button" onclick="history.back()">戻る</button>
        </div>
    <h1 class="text-4xl font-bold underline ml-80 mt-8 pl-48">投稿編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}/index/leader_create" method="POST">
            @csrf
            @method('PUT')
            <div class="text-3xl font-bold ml-auto mt-8 text-center">
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class="text-3xl font-bold ml-auto mt-8 text-center">
                <h2>内容</h2>
                <input type='text' name='post[comment]' value="{{ $post->comment }}">
            </div>
            <div class="text-2xl font-bold ml-auto mt-8 text-center">
                <input type="file" name="image">
            </div>
            <div class="text-3xl font-bold ml-auto mt-5 text-center">
            <input type="submit" value="保存">
            </div>
        </form>
        </div>
        </main>
        <footer class = "absolute h-24 bg-indigo-950 flex items-center w-full fixed">
            <p class= "text-green-500 mx-auto">hobby_find</p>
        </footer>
</body>
</x-app-layout>