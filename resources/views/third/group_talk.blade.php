<head>
    <title>Talk - Hobby_Find</title>
</head>
<x-app-layout>
    <body class="mt-5 bg-white font-sans h-max">
        <div
            class="absolute bottom-0 left-0 right-0 top-10 h-fit w-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 255, 0)">
        </div>
        <main class="py-10 text-blue-950 h-max">
            <div class="pl-40">
                <button type="button" onclick="history.back()" class="relative inline-block px-4 py-2 font-medium group">
                    <span class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                    <span class="absolute inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-black"></span>
                    <span class="relative text-black group-hover:text-white">戻る</span>
                </button>
            </div>
            <h1 class="text-indigo-950 text-5xl font-bold flex justify-center underline decoration-yellow-400 underline-offset-8">
                {{ $group->title }}
            </h1>
            <form action="/{{$group-> id}}/messages" method="POST">
                @csrf
                <div class="flex-1 py-2 px-4">
                    <input type="text" name="message[username]" placeholder="名前を入れてください…" value="{{ old('message.username') }}"/>
                    <p class="username__error" style="color:red">{{ $errors->first('message.username') }}</p>
                </div>
                <div class="flex-1 py-2 px-4">
                    <input type="text" name="message[message]" placeholder="入力してください…" value="{{ old('message.message') }}"/>
                    <p class="comment__error" style="color:red">{{ $errors->first('message.message') }}</p>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class= "bg-indigo-950 hover:bg-indigo-700 text-yellow-400 rounded w-40 h-14">送信</button>
                </div>
            </form>
            <div class="mt-7">
                @foreach ($messages as $message)
                <div class="flex ml-72 pl-96">
                    <div class="max-w-full max-h-full flex-col ml-60">
                        <div class="bg-clip-padding mt-7">
                            @if (Auth::check() && Auth::user()->id === $message->user_id)
                            <p class="relative inline-block text-yellow-400 bg-indigo-950 p-2.5 rounded-3xl mr-auto">
                                {{ $message->message }}
                            </p>
                            @else
                            <p class="relative inline-block text-yellow-400 bg-indigo-950 p-2.5 rounded-3xl ml-auto">
                                {{ $message->message }}
                            </p>
                            @endif
                            {{ $message->username }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </main>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</x-app-layout>
