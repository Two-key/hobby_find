    <head>
        <title>Likes - Hobby_Find</title>
    </head>
<x-app-layout>
    <body>
        <main class = "py-20 text-blue-950 bg-cyan-200 h-full">
            <div class="text-3xl font-bold ml-12 mt-16">
                <button type="button" onclick="history.back()">戻る</button>
            </div>
        <h1 class="text-4xl font-bold underline ml-80 mt-14 pb-10 pl-52">気になるグループ</h1>
        <h1 class="title">
            <div class='groups'>
            @foreach ($groups as $group)
                <div class='text-4xl font-bold ml-64 pl-64'>
                    <a href="/group_show/{{ $group->id }}">➣{{ $group->title }}</a>
                </div>
            @endforeach
            </div>
        </h1>
        </main>
        <footer class = "absolute h-24 bg-indigo-950 flex items-center w-full bottom-0">
            <p class= "text-green-500 mx-auto">hobby_find</p>
        </footer>
    </body>
</x-app-layout>