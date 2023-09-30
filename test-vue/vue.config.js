const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true
})
const message_el = document.getElementById("messages");
const username_input = document.getElementById("username");
const message_input = document.getElementById("message_input");
const message_form = document.getElementById("message_form");

message_form.addEventListener('submit', function (e) {
    e.preventDefault();

    let has_errors = false;

    if (username_input.value === '') {
        alert("名前を入力してください");
        has_errors = true;
    }

    if (message_input.value === '') {
        alert("メッセージを入力してください");
        has_errors = true;
    }

    if (has_errors) {
        return;
    }

    axios.post('/send-message', {
        username: username_input.value,
        message: message_input.value
    })
    .then(response => {
        // メッセージが正常に送信された場合の処理
        message_input.value = ''; // メッセージ入力欄をクリア
    })
    .catch(error => {
        // エラーが発生した場合の処理
        console.error(error);
    });
});
