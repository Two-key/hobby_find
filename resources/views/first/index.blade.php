<x-app-layout>
    <x-slot name="header">
        　index
    </x-slot>
    <body>
        <main class = "py-20 text-blue-950 bg-cyan-200 h-screen">
        <h2 class="text-3xl font-bold underline ml-96 mt-24">趣味を探す？楽しむ？仲間を集める？</h2>

                <h3 class='text-2xl ml-96 mt-11'><a href="/index/search">➣趣味を探す</a>
                
                <h3 class='text-2xl ml-96 mt-11'><a href="/group_join">➣趣味を楽しむ</a>
                
                <h3 class='text-2xl ml-96 mt-11'><a href="/index/create_group">➣仲間を集める</a>
                
                </h3>
        </main>
        <footer class = "absolute h-20 bg-indigo-950 flex items-center w-full bottom-0">
            <p class= "text-green-500 mx-auto">hobby_find</p>
        </footer>
    </body>
</x-app-layout>