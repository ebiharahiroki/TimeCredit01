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
<img src="https://github.com/ebiharahiroki/TimeCredit01/assets/132234565/b7c75c66-f7e9-44d8-b8c8-6bfd0183ddaa" width="225">
<br><b>各テーブル詳細：</b><br>
<img src="https://github.com/ebiharahiroki/TimeCredit01/assets/132234565/460b844f-ae94-4dd5-865c-2c80652e8513" width="225">

##  linter
Pintを定期的に実行して、コードスタイルの問題を修正しています。<br>
<img src="https://github.com/ebiharahiroki/TimeCredit01/assets/132234565/9753a1e0-2b0d-421c-8f8c-3183b41e910b" width="225">
<img src="https://github.com/ebiharahiroki/TimeCredit01/assets/132234565/aa6c6bf5-5deb-4310-be87-62b5344f8290" width="225">

##  こだわり
<b>わかりやすい作成フォーム：</b><br>
Tailwind CSSを用いて計算の仕方を説明することで、ユーザーは裏で行われている処理を理解し、今何をしているのか分かりやすくなっています<br><br>
<img src="https://github.com/ebiharahiroki/TimeCredit01/assets/132234565/09c92433-ccfd-49a6-97db-df1f8a7f1cd8" width="225"><br>

##  今後の計画
- 年齢入力して、残りの寿命を時間などに換算する機能追加
- テストコードを書く

