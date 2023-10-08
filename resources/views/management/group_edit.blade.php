    <head>
        <title>GroupEdit - Hobby_Find</title>
    </head>
<x-app-layout>
    <body>
        <h2 class ="pt-72 mt-80">
            <div
                class="bg-contain"
                style="background-image: url('https://res.cloudinary.com/dpbph7hyn/image/upload/v1693753463/auto_ezs9wf.svg'); height: 250px"></div>
            </div>
        </h2>
        <div
            class="absolute bottom-0 left-0 right-0 top-10 h-fit w-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 255, 0)">
        <main class = "pt-20 text-blue-950">
            <div class="pl-40">
                <button type="button" onclick="history.back()" class="relative inline-block px-4 py-2 font-medium group">
                    <span class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                    <span class="absolute inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-black"></span>
                    <span class="relative text-black group-hover:text-white">戻る</span>
                </button>
            </div>
        <form action="/groups/{{ $group->id }}/index/leader_create" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="max-w-xs text-3xl font-bold mx-auto text-center">
                <h2 class="text-3xl font-bold ml-auto text-center">グループ名</h2>
                <input type='text' name='group[title]' value="{{ $group->title }}">
                <p class="title__error" style="color:red">{{ $errors->first('group.title') }}</p>
            </div>
            <h2 class="text-3xl font-bold ml-auto mt-8 text-center">プロフィール画像</h2>
            <div class="max-w-xs text-2xl font-bold mx-auto mt-8 text-center">
                <input type="file" name="group[image]">
                <p class="image__error" style="color:red">{{ $errors->first('group.image') }}</p>
            </div>
            <div class="text-3xl font-bold ml-auto mt-8 text-center">
                <h2>グループ概要</h2>
                <textarea name='group[overview]' value="{{ $group->overview }}"></textarea>
                 <p class="overview__error" style="color:red">{{ $errors->first('group.overview') }}</p>
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
            <button class = "bg-indigo-950 hover:bg-indigo-700 text-yellow-400 rounded w-64 h-14" type="submit">グループのプロフィールを変更する</button>
            </div> 
        </form>
        </main>
        </div> 
    </body>
</x-app-layout>