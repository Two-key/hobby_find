    <head>
        <title>CreateGroup - Hobby_Find</title>
    </head>
<x-app-layout>
    <body>
        <main class = "py-20 text-blue-950">
            <div class="text-3xl font-bold ml-12 mt-16">
                <button type="button" onclick="history.back()">戻る</button>
            </div>
        <form action="/groups" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="text-3xl font-bold ml-auto text-center">
                <h2>グループ名</h2>
                <input type="text" name="group[title]" placeholder="タイトル"/>
            </div>
            <h2>プロフィール画像</h2>
            <div class="text-2xl font-bold ml-auto mt-8 text-center">
                <input type="file" name="image">
            </div>
            <div class="text-3xl font-bold ml-auto mt-8 text-center">
                <h2>作りたいグループの概要</h2>
                <textarea name="group[overview]" placeholder=
                "参加人数：◯人
                    活動日：◯曜日
                    場所：◯◯
                    活動内容：◯◯な事をしています！"></textarea>
            </div>
            <div class="text-3xl font-bold ml-auto mt-10 text-center">
                <h2>Category</h2>
                <select name="group[category_id]">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                    </select>
            </div>
            <div class="text-3xl font-bold ml-auto mt-5 text-center">
            <input type="submit" value="作成"/>
            </div>
        </form>
       </main>
    </body>
</x-app-layout>