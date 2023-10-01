
<p align="center"><b>趣味仲間と航海に出よう</b></p>

<p align="center"><a href="https://stark-journey-71646.herokuapp.com" target="_blank"><img src="https://stark-journey-71646.herokuapp.com/img/c5caaa1a.png" width="400"></a></p>
<h1 align="center">Hobby_Find</h1>

##  制作背景
このアプリは自己紹介で困った経験を基にその構想が生まれました．<br><br>
「あなたの趣味は何ですか？」<br><br>
自分の趣味に自信を持って、この質問にスパッと答えることができるようになることを目的に，このアプリを制作しました.<br>
ユーザーが自分の「好き」を発見し、趣味仲間を増やして，<b>老若男女関係なく、「楽しいを共有できる場所」になる</b>ことを願っています．

##  概要
「趣味や仲間が欲しいあなたに」<br>
Hobby_Findは以下に示すポイントに根差して設計されています．
- カテゴリー別検索機能
- いいね機能
- シンプルで使いやすいUI
- みんなで楽しむグループトーク

「自分の「好き」を発見し、趣味仲間と「好き」を楽しむこと」をコンセプトとしています．<br><br>
<a href="https://hobbyfind-e3283a7fee5e.herokuapp.com/" target="_blank">アプリへGO</a>

##  開発環境
<b>使用言語：</b><br>
- PHP
- HTML
- CSS(Tailwind)
- JavaScript(jQuery)

<b>環境：</b><br>
- Laravel(ver.8)
- AWS(EC2＋Cloud9)
- MySQL(MariaDB)
- Github

<b>デプロイ：</b><br>
- Heroku

##  データ構成
<b>「テーブル構成・リレーション」：</b><br>
<img src="https://res.cloudinary.com/dpbph7hyn/image/upload/v1694143995/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88_228_rxzulk.png" width="225">
<br><b>各テーブル詳細：</b><br>
<img src="https://res.cloudinary.com/dpbph7hyn/image/upload/v1694144761/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88_236_pg7ae4.png" width="500">

##  機能
- CRUD
- ログイン
- 画像アップロード＆表示
- Breezeログイン
- 趣味のカテゴリー別検索
- いいね機能
- 投稿機能
- グループ機能
- グループトーク機能

##  こだわり
<b>冒険に出るワクワク感を高める背景画像とボタン：</b><br>
Canvaを用いて、背景画像やロゴを自作しました。また、Tailwindを用いて動くボタンを設定し，ワクワク感を演出しています<br><br>
<img src="https://res.cloudinary.com/dpbph7hyn/image/upload/v1694142040/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88_226_fqyxtb.png" width="225"><br>
<b>シンプルでみやすいUI：</b><br>
投稿やグループ一覧を表示する際には、一つ一つをカード化することによってまとまりを作り、見やすく工夫しています<br><br>
<img src="https://res.cloudinary.com/dpbph7hyn/image/upload/v1694142145/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88_227_saam1j.png" width="225">

##  楽しみ方
<b>自分の趣味を探したいユーザー：</b><br>
自分の「好き」を探したいユーザーは「趣味を探す」からカテゴリー別検索していくことで，自分の興味が漠然としている人でも、キーワード検索する必要がないため、心配ありません．<br>
いいね機能を利用することによって、後から気になるグループを見返すことができます。ユーザーにより作成される自分に合ったグループを見つけることができます．<br><br>
<b>趣味仲間を探したいユーザー：</b><br>
趣味を探す中で、自分の好みのグループが見つからなかった場合は、自分でグループを作成し、仲間を募集することができます<br>
自分が作成したグループでは、自由にプロフィールや投稿内容を編集・削除することができます。<br>

##  今後の計画
- クリック回数履歴の取得と利用（アナリティクスの作成）
- オススメ機能の実装
- ページの読み込み速度の向上
- カレンダー機能を追加し、グループの予定をシェア
- 関連投稿の表示
- 投稿評価（いいね）とそれによる投稿並び替え
- 趣味の文字検索機能の追加