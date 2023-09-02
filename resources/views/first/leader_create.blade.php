    <head>
        <title>MyCreate - Hobby_Find</title>
        <script>
        function deleteGroup(id) {
            'use strict'
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
        </script>
    </head>
<x-app-layout>
    <body>
        <main class = "py-20 text-blue-950 bg-cyan-200 h-full">
            <div class="text-3xl font-bold ml-12 mt-16">
                <button type="button" onclick="history.back()">戻る</button>
            </div>
        <h1 class="text-4xl font-bold underline ml-80 mt-14 pb-10 pl-36">自分がつくったグループ</h1>
        <h1 class="title">
            <div class='leaders'>
            @foreach ($groups as $group)
                <div class='text-4xl font-bold ml-64 pl-64'>
                    <a href="/{{ $group->id }}/leadergroup_show">➣{{ $group->title }}</a>
                </div>
                <div class='text-2xl ml-96 pl-96'>
                <form action="/groups/{{ $group->id }}" id="form_{{ $group->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deleteGroup({{ $group->id }})">削除</button> 
                </form>
                </div>
            @endforeach
            </div>
        </h1>
        </main>
    </body>
</x-app-layout>