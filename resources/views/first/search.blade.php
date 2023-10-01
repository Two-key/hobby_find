    <head>
        <title>Search - Hobby_Find</title>
    </head>
<x-app-layout>
    <body>
        <h2 class ="pt-52">
            <div
                class="bg-contain"
                style="background-image: url('https://res.cloudinary.com/dpbph7hyn/image/upload/v1693728649/Untitled_design_ozjc9e.svg'); height: 300px"></div>
            </div>
        </h2>
        <div
            class="absolute bottom-0 left-0 right-0 top-10 h-fit w-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 255, 0)">
            <main class = "pt-16 pb-0 text-blue-950">
                <div class="pl-40">
                    <button type="button" onclick="history.back()" class="relative inline-block px-4 py-2 font-medium group">
                        <span class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                        <span class="absolute inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-black"></span>
                        <span class="relative text-black group-hover:text-white">戻る</span>
                    </button>
                </div>
                <h1 class="mx-auto text-indigo-950 text-4xl font-bold underline">趣味を探す</h1>
                <div class="ml-72 pl-40 pt-5">
                    <form action="{{ route('group.search') }}" method="GET">
                        @csrf
                        <h2 class = "mx-auto text-2xl mt-14 mb-4">気になるカテゴリーを選んで探してみよう！</h2>
                        <div class="pl-20 mt-5">
                            <select name="category">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            <button class = "bg-indigo-950 hover:bg-indigo-700 text-yellow-400 rounded w-20 h-10" type="submit">探す</button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </body>
</x-app-layout>