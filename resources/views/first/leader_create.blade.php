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
        <main class = "py-10 text-blue-950">
            <div class="pl-40">
                <button type="button" onclick="history.back()" class="relative inline-block px-4 py-2 font-medium group">
                    <span class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                    <span class="absolute inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-black"></span>
                    <span class="relative text-black group-hover:text-white">戻る</span>
                </button>
            </div>
            
        <h1 class="text-4xl font-bold underline ml-80 mt-10 pb-10 pl-36">自分がつくったグループ</h1>
        
        <div class = "flex basis-auto space-x-5 ml-5">  
            @foreach ($groups as $group)
                <div class="block max-w-[18rem] rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat">
                        <form action="/groups/{{ $group->id }}" id="form_{{ $group->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class = "bg-red-900 hover:bg-red-700 text-green-500 rounded w-10 h-10" type="button" onclick="deleteGroup({{ $group->id }})">削除</button> 
                        </form>
                        <a href="/{{ $group->id }}/leadergroup_show">
                        <img 
                            class="rounded-t-lg"
                            src="{{ $group->image_url }}"
                            alt="Skyscrapers" />
                    </div>
                    <div class="p-6">
                        <p class="text-base text-neutral-600 dark:text-neutral-200">
                          {{ $group->title }}
                        </p>
                    </div>
                </div>
                        </a>
            @endforeach
        </div>
        </main>
    </body>
</x-app-layout>