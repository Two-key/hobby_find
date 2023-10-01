<!DOCTYPE html>
<head>
    <title>Talk - Hobby_Find</title>
</head>
<x-app-layout>
    <body>
        <main>
            <div>
                <button type="button" onclick="history.back()" class="relative inline-block px-4 py-2 font-medium group">
                    <span class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                    <span class="absolute inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-black"></span>
                    <span class="relative text-black group-hover:text-white">戻る</span>
                </button>
            </div>
        <div class="app">
            <header>
                <h1>Let's Talk!</h1>
            </header>
            <div>
            @foreach ($messages as $message) 
                    <div>
                        <p>
                           {{ $message->username }}
                        </p>
                        <p>
                            {{ $message->message }}
                        </p>
                    </div>
            @endforeach
            </div>
            <form action="/{{$group-> id}}/messages" method="POST">
            @csrf
            <div>
                <input type="text" name="message[username]" placeholder="名前を入れてください…" value="{{ old('message.username') }}"/>
                <p class="username__error" style="color:red">{{ $errors->first('message.username') }}</p>
            </div>
                <input type="text" name="message[message]" placeholder="入力してください…" value="{{ old('message.message') }}"/>
                <p class="comment__error" style="color:red">{{ $errors->first('message.message') }}</p>
                <button type="submit">送信</button>
            </form>
            
        </main>
        </div> 
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</x-app-layout>
</html>