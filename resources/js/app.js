import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Initialization for ES Users
import {
  Carousel,
  initTE,
} from "tw-elements";

initTE({ Carousel });

import { createApp } from 'vue';
import axios from 'axios';
import Echo from 'laravel-echo';

// その他のインポートと設定

const app = createApp({});

// Laravel Echoの初期化
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY, // .envファイルから取得するか、直接設定
    cluster: process.env.MIX_PUSHER_APP_CLUSTER, // 同様に.envファイルから取得するか、直接設定
    // その他のオプション
});

// その他のコード

app.mount('#app');

require('./bootstrap');

const message_el = document.getElementById("messages");
const username_input = document.getElementById("username");
const message_input = document.getElementById("message_input");
const message_form = document.getElementById("message_form");

message_form.addEventListener('submit' ,function (e) {
    e.preventDefault();

    let has_errors = false;

    if (username_input.value == '') {
        alert("名前を入力してください");
        has_errors = true;
    }

    if (message_input.value == '') {
        alert("メッセージを入力してください");
        has_errors = true;
    }

    if(has_errors) {
        return;
    }

    const options = {
        method: 'post',
        url: '/send-message',
        data: {
            username: username_input.value,
            message: message_input.value
        }
    }

    axios(options);
});

window.Echo.channel('chat')
    .listen('.message', (e) =>{
        message_el.innerHTML += '<div class="message"><strong>' + e.username + ':</strong> ' + e.message + '</div>';
        // console.log(e);
    });
    