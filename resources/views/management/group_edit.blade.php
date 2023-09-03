    <head>
        <title>GroupEdit - Hobby_Find</title>
    </head>
<x-app-layout>
    <body>
        <main class = "py-20 text-blue-950">
            <div class="pl-40">
                <button type="button" onclick="history.back()" class="relative inline-block px-4 py-2 font-medium group">
                    <span class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                    <span class="absolute inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-black"></span>
                    <span class="relative text-black group-hover:text-white">戻る</span>
                </button>
            </div>
        <form action="/groups/{{ $group->id }}/index/leader_create" method="POST">
            @csrf
            @method('PUT')
            <div class="text-3xl font-bold ml-auto text-center">
                <h2 class="text-3xl font-bold ml-auto text-center">グループ名</h2>
                <input type='text' name='group[title]' value="{{ $group->title }}">
            </div>
            <h2 class="text-3xl font-bold ml-auto mt-8 text-center">プロフィール画像</h2>
            <div class="text-2xl font-bold ml-auto mt-8 text-center">
                <input type="file" name="image">
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
            <div class="pl-56 ml-72 mt-10">
            <button class = "bg-indigo-950 hover:bg-indigo-700 text-green-500 rounded w-64 h-14" type="submit">グループのプロフィールを変更する</button>
            </div> 
        </form>
        </main>
    </body>
</x-app-layout>