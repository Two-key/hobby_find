<head>
    <title>PostEdit - Hobby_Find</title>
</head>
<x-app-layout>
<body>
    <h2 class="pt-72 mt-80">
        <div class="bg-contain"
            style="background-image: url('https://res.cloudinary.com/dpbph7hyn/image/upload/v1693753463/auto_ezs9wf.svg'); height: 250px"></div>
    </h2>
    <div class="absolute bottom-0 left-0 right-0 top-10 h-fit w-full overflow-hidden bg-fixed"
        style="background-color: rgba(0, 0, 255, 0)">
    </div>
    <main class="pt-20 text-blue-950">
        <div class="pl-40">
            <button type="button" onclick="history.back()"
                class="relative inline-block px-4 py-2 font-medium group">
                <span
                    class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0">
                </span>
                <span class="absolute inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-black">
                </span>
                <span class="relative text-black group-hover:text-white">戻る</span>
            </button>
        </div>
        <h1 class="flex justify-center text-indigo-950 text-4xl font-bold underline mt-8">投稿編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}/index/leader_create" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="max-w-xs text-3xl font-bold mx-auto mt-8 text-center">
                    <h2>タイトル</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                    <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                <div class="max-w-xs text-3xl font-bold mx-auto mt-8 text-center">
                    <h2>内容</h2>
                    <input type='text' name='post[comment]' value="{{ $post->comment }}">
                    <p class="comment__error" style="color:red">{{ $errors->first('post.comment') }}</p>
                </div>
                <div class="max-w-xs text-2xl font-bold mx-auto mt-8 text-center">
                    <input type="file" name="post[image]">
                    <p class="image__error" style="color:red">{{ $errors->first('post.image') }}</p>
                </div>
                <div class="pl-60 ml-80 mt-10">
                    <button class="bg-indigo-950 hover:bg-indigo-700 text-yellow-400 rounded w-40 h-14"
                        type="submit">投稿を更新する</button>
                </div>
            </form>
        </div>
    </main>
</body>
</x-app-layout>
