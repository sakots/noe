# noe-board
noe-boardは全く新しいお絵かき掲示板スクリプトです。  
new oekaki engine で「noe」です。

<a href="https://github.com/funige/neo/">PaintBBS NEO</a>

## 概要
POTI-board改で使用しているテンプレートエンジン「htmltemplate.inc」はphp7だとエラーが出てしまうので今後が危ない…  
ということでなんか新しいテンプレートエンジンはないか探したところ、

<a href="http://skinny.sx68.net/">Skinny</a>  

見つけました！これにPOTI-boardを移植…  
できねえ〜〜〜〜〜〜〜〜！！！！！！！！しるか〜〜〜〜〜〜〜〜！！！  
なら新しく作ったるわ〜〜〜〜〜〜〜〜〜！！！！！！！ASY  

という経緯です。

## 設置方法
・アップロード  
・mySQLにデータベースを作る（データベースは「utf8(utf8)」で作って「utf8_general_ci」でつないでください）  
・パスワードその他を設定  
・setupdb.phpを実行（エラーが出なければOKです。ここでデータベースにテーブルが作られます。ディレクトリの作成も行われます。）  
・OK！

## <a name="history">履歴</a>

### [2018/12/27] v0.8.2
- 削除ができなくなっていたのを修正。

### [2018/12/27] v0.8.1
- 日付が表示されないの修正。

### [2018/12/27] v0.8.0
- 完全にレス対抗。
- 最後のデータベース形式変更にしたい。テーブルを2つ使っています。

### [2018/12/27] v0.7.2
- シェアボタン修正。

### [2018/12/26] v0.7.1
- レスの付いていない記事を削除すると返信ボタンが消えてしまう問題に対処。
- レスが付くまで削除できなくしただけですけどね。

### [2018/12/26] v0.7.0
- 管理モード搭載。
- noeadmin.php?adminpass=(管理者パス)をURLに直打ちして入ってください。
- 一時削除になっているレスも見れます。
- この画面からの削除は管理者パスでもデータベースからの削除になります。

### [2018/12/26] v0.6.2
- 返信ボタン増殖を阻止。

### [2018/12/26] v0.6.1
- ページング周りをふたば式にできるように。

### [2018/12/26] v0.6.0
- pch保存/再生仮対応。
- データベース形式がまた変わりました。お手数ですが作り直してください。これ以上は変わらないと思いたい。

### [2018/12/26] v0.5.2
- シェアボタンがうまく表示されないの修正。

### [2018/12/26] v0.5.1
- レスにSNSでシェアするボタン実装。
- configに追加項目があります。

### [2018/12/26] v0.5.0
- ページング機能実装。

#### 予定
- 管理モード
- URL自動リンク
- pch保存/再生
- セキュリティ向上

### [2018/12/25] v0.4.0
- 削除機能実装。記事番号が投稿者passか管理passと一致したときに削除します。
- 管理passと一致のときはデータベース上からは削除しません。
- 伴ってパスワードの暗号化を password_hash() に変更。

### [2018/12/25] v0.3.1
- よくわからないエラーを出なくした。

### [2018/12/24] v0.3.0
- レスを付けられるようにした
- データベース形式が変更になっているのでテーブルを削除してください。
- ディレクトリもセットアップスクリプトで作るように設定。

#### 予定
- 削除機能
- ページング
- よくわからないエラー削除

### [2018/12/24] v0.2.0
- ログをmySQLのデータベースに変更

### [2018/09/20] v0.1.1
- スレッド式にするためにログに通し番号を付けた（ログの形式が変わりました注意）

### [2018/09/20] v0.1.0
- 画像の投稿ができるようになりました！！やった！！！！！！
#### 予定
- スレッド式にする
- ログ数を決めて何ページかに分ける

### [2018/09/20] v0.0.3
- 一時保存フォルダに画像を保存するまでできた（最初の画面に反映できない）
- スキンをフォルダに格納

### [2018/09/20] v0.0.2
- 投稿画面を出すまでできた（保存はできない）

### [2018/09/19] v0.0.1
- プロジェクト開始
- とりあえずSkinnyを動かせる掲示板を作った（削除も何もできないけど）
