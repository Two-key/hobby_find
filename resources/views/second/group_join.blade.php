    <head>
        <title>GroupJoin - Hobby_Find</title>
    </head>
<x-app-layout>
    <body>
        <div class ="pl-96 ml-96">
            <img src="https://res.cloudinary.com/dpbph7hyn/image/upload/v1693747589/Untitled_design_2_h0rzlo.svg" width="500" height="500">
        </div>
        <h2 class ="pt-0">
            <div
                class="bg-contain"
                style="background-image: url('https://res.cloudinary.com/dpbph7hyn/image/upload/v1693746859/Untitled_design_1_tnbdkx.svg'); height: 250px"></div>
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
        <h1 class="text-4xl font-bold underline ml-80 mt-14 pb-10 pl-44">仲間入りしたグループ</h1>
        <div class = "flex basis-auto space-x-5 ml-5">  
            @foreach ($groups as $group)
            <a href="/group_show/{{ $group->id }}">
                <div class="block max-w-xs rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                <div class="relative overflow-hidden bg-cover bg-no-repeat">
                <img 
                    class="rounded-t-lg max-h-48 aspect-auto"
                    src="{{ $group->image_url }}"
                    alt="画像を表示できません" />
                </div>
                <div class="p-6">
                    <p class="flex justify-center font-bold text-base text-neutral-600 dark:text-neutral-200">
                      {{ $group->title }}
                    </p>
                </div>
                </div>
            </a>
           @endforeach
        </div>
        </main>
        </div>
    </body>
</x-app-layout>