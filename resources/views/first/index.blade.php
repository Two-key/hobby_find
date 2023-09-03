    <head>
        <title>Home - Hobby_Find</title>
    </head>
<x-app-layout>
    <body>
        <main>
            <h2 class ="pl-40 ml-60 mt-5">
            <img src="https://res.cloudinary.com/dpbph7hyn/image/upload/v1693632321/Hobby%E3%83%AD%E3%82%B41_tuxbiu.png" width="500" height="100">
            </h2>
            <div class= pl-20>
            <div
                class="bg-contain"
                style="background-image: url('https://res.cloudinary.com/dpbph7hyn/image/upload/v1693719210/tresuar_ziv4o5.png'); height: 380px"></div>
            </div>
            <div
                class="absolute bottom-0 left-0 right-0 top-12 h-fit w-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 255, 0)">
            <div class = "flex flex-row space-x-56 pl-48 pt-64">
                <div class="bg-yellow-400 block max-w-[18rem] rounded-lg shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
                    <div class="border-b-2 border-[#0000002d] px-6 py-3 text-black">
                        船を探す
                    </div>
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-black">
                          趣味を探す
                        </h5>
                        <button type="button" onclick="location.href='/index/search'" class="relative inline-block text-lg group">
                        <span class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-gray-800 transition-colors duration-300 ease-out border-2 border-gray-900 rounded-lg group-hover:text-white">
                        <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
                        <span class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-gray-900 group-hover:-rotate-180 ease"></span>
                        <span class="relative">出発する</span>
                        </span>
                        <span class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-gray-900 rounded-lg group-hover:mb-0 group-hover:mr-0" data-rounded="rounded-lg"></span>
                    </div>
                </div>
                <div class="bg-yellow-400 block max-w-[18rem] rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
                    <div class="border-b-2 border-[#0000002d] px-6 py-3 text-black">
                        乗り込んだ船
                    </div>
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-black">
                            所属グループ
                        </h5>
                        <button type="button" onclick="location.href='/group_join'" class="relative inline-block text-lg group">
                        <span class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-gray-800 transition-colors duration-300 ease-out border-2 border-gray-900 rounded-lg group-hover:text-white">
                        <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
                        <span class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-gray-900 group-hover:-rotate-180 ease"></span>
                        <span class="relative">出発する</span>
                        </span>
                        <span class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-gray-900 rounded-lg group-hover:mb-0 group-hover:mr-0" data-rounded="rounded-lg"></span>
                    </div>
                </div>
                <div class="bg-yellow-400 block max-w-[18rem] rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
                    <div class="border-b-2 border-[#0000002d] px-6 py-3 text-black">
                        船をつくる
                    </div>
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-black">
                            グループ作成
                        </h5>
                        <button type="button" onclick="location.href='/index/create_group'" class="relative inline-block text-lg group">
                        <span class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-gray-800 transition-colors duration-300 ease-out border-2 border-gray-900 rounded-lg group-hover:text-white">
                        <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
                        <span class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-gray-900 group-hover:-rotate-180 ease"></span>
                        <span class="relative">出発する</span>
                        </span>
                        <span class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-gray-900 rounded-lg group-hover:mb-0 group-hover:mr-0" data-rounded="rounded-lg"></span>
                    </div>
                </div>
            </div>
            </div>
        </main>
    </body>
</x-app-layout>
