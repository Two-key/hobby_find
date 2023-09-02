    <head>
        <title>GroupEdit - Hobby_Find</title>
    </head>
<x-app-layout>
    <body>
        <main class = "py-20 text-blue-950 bg-cyan-200 h-full">
            <div class="text-3xl font-bold ml-12 mt-16">
                <button type="button" onclick="history.back()">戻る</button>
            </div>
        <form action="/groups/{{ $group->id }}/index/leader_create" method="POST">
            @csrf
            @method('PUT')
            <div class="text-3xl font-bold ml-auto text-center">
                <h2>グループ名</h2>
                <input type='text' name='group[title]' value="{{ $group->title }}">
            </div>
            <div class="text-3xl font-bold ml-auto mt-8 text-center">
                <h2>グループ概要</h2>
                <textarea name='group[overview]' value="{{ $group->overview }}"></textarea>
            </div>
            <div class="text-3xl font-bold ml-auto mt-8 text-center">
                <h2>カテゴリー</h2>
                <select name="group[category_id]">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-3xl font-bold ml-auto mt-5 text-center">
            <input type="submit" value="更新">
            </div>
        </form>
        </main>
        <footer class = "absolute h-24 bg-indigo-950 flex items-center w-full fixed">
            <p class= "text-green-500 mx-auto">hobby_find</p>
        </footer>
    </body>
</x-app-layout>