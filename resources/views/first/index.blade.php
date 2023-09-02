    <head>
        <title>Home - Hobby_Find</title>
    </head>
<x-app-layout>
    <body>
        <main>
            <h2 class ="pl-40 ml-60 mt-20">
            <img src="https://res.cloudinary.com/dpbph7hyn/image/upload/v1693632321/Hobby%E3%83%AD%E3%82%B41_tuxbiu.png" width="500" height="100">
            </h2>
            <div class = "flex flex-row space-x-32 pl-40 pt-10 ml-40">
                <div class="block max-w-[18rem] rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
                    <div class="border-b-2 border-[#0000002d] px-6 py-3 text-black">
                        趣味を探す
                    </div>
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-black">
                          趣味を探す
                        </h5>
                        <div class = "bg-white text-black rounded-lg mx-auto w-10">
                          <button onclick="location.href='/index/search'">GO!!</button>
                        </div>
                    </div>
                </div>
                <div class="block max-w-[18rem] rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
                    <div class="border-b-2 border-[#0000002d] px-6 py-3 text-black">
                        趣味を楽しむ
                    </div>
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-black">
                          趣味を楽しむ
                        </h5>
                        <div class = "bg-white text-black rounded-lg mx-auto w-10">
                          <button onclick="location.href='/group_join'">GO!!</button>
                        </div>
                    </div>
                </div>
                <div class="block max-w-[18rem] rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
                    <div class="border-b-2 border-[#0000002d] px-6 py-3 text-black">
                        仲間を集める
                    </div>
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-black">
                          仲間を集める
                        </h5>
                        <div class = "bg-white text-black rounded-lg mx-auto w-10">
                          <button onclick="location.href='/index/create_group'">GO!!</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</x-app-layout>