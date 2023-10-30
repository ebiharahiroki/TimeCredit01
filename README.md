<h1 align="center">働きすぎ防止アプリ</h1>

##  概要・制作背景
動画編集の仕事をクラウドソーシング経由でもらっていたときに、一人ブラック企業のように働きすぎてしまったため、働きすぎ防止や時間の使い方を再考するきっかけを作るために、
働かずに自由に使える時間を計算できるアプリを作りました。

##  機能
- ログイン
- CRUD
- 働かずに自由に使えた時間計算
- 働かずに自由に使えた時間グラフ表示機能

<a href="https://overworkpreventionapp-8cdd332c3d7a.herokuapp.com/register">アプリへGO</a>

##  開発環境
<b>使用言語：</b><br>
- PHP
- HTML
- CSS(Tailwind CSS)
- JavaScript

<b>環境：</b><br>
- Laravel(ver.9)
- AWS(EC2＋Cloud9)
- MySQL(MariaDB)
- Github

<b>デプロイ：</b><br>
- Heroku

##  データ構成
<b>「テーブル構成・リレーション」：</b><br>
<img src="https://github.com/ebiharahiroki/TimeCredit01/assets/132234565/e9dc44d0-e8a1-4733-be14-799ebed3061f" width="225">
<br><b>各テーブル詳細：</b><br>
<img src="https://github.com/ebiharahiroki/TimeCredit01/assets/132234565/18447a67-7206-45c8-a806-337ad46c5aa6" width="500">

##  こだわり
<b>わかりやすい作成フォーム：</b><br>
Tailwind CSSを用いて計算の仕方を説明することで、ユーザーは裏で行われている処理を理解し、今何をしているのか分かりやすくなっています<br><br>
<img src="https://github.com/ebiharahiroki/TimeCredit01/assets/132234565/09c92433-ccfd-49a6-97db-df1f8a7f1cd8"> width="225"><br>
<b>月：</b><br>
リレーションやhiddenタイプのinputタグを用いて，1ページに1つのフォームによるわかりやすい投稿機能を実現しています<br><br>
<img src="https://github.com/ebiharahiroki/TimeCredit01/assets/132234565/343a3183-1cf3-4957-8cfe-f81488679e0b"> width="225">
<b>グラフ：</b><br>
リレーションやhiddenタイプのinputタグを用いて，1ページに1つのフォームによるわかりやすい投稿機能を実現しています<br><br>
<img src="https://github.com/ebiharahiroki/TimeCredit01/assets/132234565/46adec22-6070-4971-9924-f1eab54663bc"> width="225">

##  今後の計画
- 年齢入力して、残りの寿命を時間などに換算する機能追加
- テストコードを書く

