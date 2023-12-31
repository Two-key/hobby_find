<head>
    <title>CreateGroup - Hobby_Find</title>
</head>
<x-app-layout>
    <body>
        <h2 class="pt-72 mt-80">
            <div
                class="bg-contain"
                style="background-image: url('https://res.cloudinary.com/dpbph7hyn/image/upload/v1693753463/auto_ezs9wf.svg'); height: 250px">
            </div>
        </h2>
        <div
            class="absolute bottom-0 left-0 right-0 top-10 h-fit w-full overflow-hidden bg-fixed"
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
            <form action="/groups" method="POST" enctype="multipart/form-data">
                @csrf
                <h2 class="text-3xl font-bold ml-auto text-center">グループ名</h2>
                <div class="max-w-xs text-2xl font-bold mx-auto text-center">
                    <input type="text" name="group[title]" placeholder="◯◯会"
                        value="{{ old('group.title') }}" />
                    <p class="title__error"
                        style="color:red">{{ $errors->first('group.title') }}</p>
                </div>
                <h2 class="text-3xl font-bold ml-auto mt-8 text-center">プロフィール画像</h2>
                <div class="max-w-xs text-2xl font-bold mx-auto mt-5 text-center">
                    <input type="file" name="group[image]" />
                    <p class="image__error"
                        style="color:red">{{ $errors->first('group.image') }}</p>
                </div>
                <div class="text-3xl font-bold ml-auto mt-8 text-center">
                    <h2>グループの概要</h2>
                    <textarea name="group[overview]" placeholder=
                        "参加人数：◯人
                        活動日：◯曜日
                        場所：◯◯
                        活動内容：◯◯な事をしています！">{{ old('group.overview') }}</textarea>
                    <p class="overview__error"
                        style="color:red">{{ $errors->first('group.overview') }}</p>
                </div>
                <div class="text-3xl font-bold ml-auto mt-10 text-center">
                    <h2>カテゴリー</h2>
                    <select name="group[category_id]">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="pl-60 ml-80 mt-10">
                    <button class="bg-indigo-950 hover:bg-indigo-900 text-yellow-400 rounded w-40 h-14"
                        type="submit">仲間集めを開始する</button>
                </div>
            </form>
        </main>
    </body>
</x-app-layout>