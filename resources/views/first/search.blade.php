<x-app-layout>
    <body>
        <header class = "fixed top-0 left-0 right-0 bg-indigo-950">
            <div class = "flex items-center justify-between">
                <h1 class = "mx-2 text-4xl text-green-500 decoration-orange-50 font-bold"><a href="/">HOBBY-FIND</a></h1>
                <nav class="header-nav-item">
                    <ul class="flex mx-10 block text-green-500 h-20 leading-10 mt-px">
                        <li class="text-2xl mt-6 mr-5"><a class="like-group" href="/index/like">気になる</a></li>
                        <li class="text-2xl mt-6 mr-2"><a class="my-create-group" href="/index/leader_create">マイグループ</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class = "py-20 text-blue-950 bg-cyan-200 h-screen">
            <div class="text-3xl font-bold ml-14 mt-16">
                <button type="button" onclick="history.back()">戻る</button>
            </div>
        <h1 class="text-4xl font-bold underline ml-96 mt-14 pl-36">趣味を探す</h1>
        <div class="ml-96 pl-32">
            <form action="{{ route('group.search') }}" method="GET">
                @csrf
                <h2 class = "text-2xl mt-14 mb-4">あなたの好きなことは何？</h2>
                <div class="pl-16">
                    <select name="category">
                       @foreach($categories as $category)
                       <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                       @endforeach
                    </select>
                <button class = "bg-indigo-950 hover:bg-indigo-700 text-green-500" type="submit">検索</button>
                </div>
            </form>
        </div>
        </main>
        <footer class = "absolute h-24 bg-indigo-950 flex items-center w-full bottom-0">
            <p class= "text-green-500 mx-auto">hobby_find</p>
        </footer>
    </body>
</x-app-layout>