    <head>
        <title>GroupShow - Hobby_Find</title>
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
            <h1 class="text-4xl font-bold underline ml-80 mt-10 pl-32">{{ $category->category_name }}が好きな人の集まり</h1>
        </main>
        <div class = "flex basis-auto space-x-5 ml-5">  
            @foreach ($groups as $group)
                <div class="block max-w-[18rem] rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                <div class="relative overflow-hidden bg-cover bg-no-repeat">
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
           @endforeach
        </div>
    </body>
</x-app-layout>