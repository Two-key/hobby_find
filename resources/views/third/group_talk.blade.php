<!DOCTYPE html>
<head>
    <title>Talk - Hobby_Find</title>
</head>
<x-app-layout>
    <body>
        <div class="app">
            <header>
                <h1>Let's Talk!</h1>
                <input type="text" name="username" id="username" placeholder="名前を入れてください…" />
            </header>

            <div id="messages"></div>
    
            <form id="message_form">
                <input type="text" name="message" id="message_input" placeholder="入力してください…" />
                <button type="submit" id="message_send">送信</button>
            </form>
        </div>
        <script src="./js/app.js"></script>
    </body>
</x-app-layout>
</html>