# noe-board

noe-boardは全く新しいお絵かき掲示板スクリプトです。  
new oekaki engine で「noe」です。
nap of the earth(匍匐飛行)ではございません。どうでもいいけど。

[PaintBBS NEO](https://github.com/funige/neo/)

## 概要

POTI-board改で使用しているテンプレートエンジン「htmltemplate.inc」は老朽化して今後が危ない…  
ということでなんか新しいテンプレートエンジンはないか探したところ、

[Skinny](http://skinny.sx68.net/)
↓  
[smarty](https://www.smarty.net/)

見つけました！これにPOTI-boardを移植…  
できねえ〜〜〜〜〜〜〜〜！！！！！！！！しるか〜〜〜〜〜〜〜〜！！！  
なら新しく作ったるわ〜〜〜〜〜〜〜〜〜！！！！！！！ASY  

いや、できた。しかしデータベースも使ってみたい…  

という経緯です。

## 設置方法

- パスワードその他を設定  
- アップロード
- OK！ index.phpにアクセスしてください。

## 注意

- ~~まだいわゆるアルファ版です。テーマ等仕様がころころ変わる可能性があります。~~
- そろそろいわゆるベータ版かと思った次第

## サンプルとサポート

[このお絵かき掲示板はSQLiteを（以下略](https://sakots.red/noe/)

## 履歴

### [2021/01/01] v0.34.0

- PHP8ではアニメ記録のチェックを外すと画像がありませんになるため最新版と差し換え (by さとぴあ)

`picpost.php`、`index.php` を更新してください。

### [2020/12/10] v0.33.4

- NGワードがあると拒絶する関数を最適化。負荷が下がり処理速度が向上（by さとぴあ）
- 本文へのURL書き込みを禁止としても、削除キーに管理パスが入っていればURLを本文に記入できるように（by さとぴあ）

### [2020/11/29] v0.33.3

- 描画時間関連の軽微な問題を回避

### [2020/11/27] v0.33.2

- 描画時間を合計表示に（by さとぴあ）

### [2020/10/31] v0.33.1

- 投稿者名をコピーする機能の改良(by さとぴあ)
  - それに合わせてテーマも改良

### [2020/10/27] v0.33.0

- user-codeでヒットしない時のipアドレスのチェックを必須化。(by さとぴあ)
- お絵かき投稿時のIPチェックをする する:1 しない:0の設定項目を廃止。(by さとぴあ)
  - お絵かきした画像が本人の画像かどうかの確認時にipアドレスのチェックをしない設定にすると、誰でもテンポラリから投稿できてしまうバグを修正。

### [2020/10/24] v0.32.0

- 二重投稿、レスコメント、描画時間記録の仕様の変更(by さとぴあ)
  - 詳しくは[こちら](https://github.com/sakots/noe-board/pull/3)

### [2020/10/24] v0.31.2

- 描画時間の$ptimeが未定義変数になるケースがあったのを修正(by さとぴあ)

### [2020/10/24] v0.31.1

- NGワードと描画時間の処理を関数化(by さとぴあ)

### [2020/10/15]

- テーマ修正
  - 名無しさんありがとうございます

### [2020/09/01]

- テーマ修正
  - 名無しさんありがとうございます

### [2020/07/16] v0.31.0

- 名前から作者名検索できるように
- テーマ

### [2020/06/14]

- テーマから実装予定のない機能を削った

### [2020/06/11] v0.30.2

- テーブル作成時の大きさに余裕を持たせた

### [2020/06/11] v0.30.1

- 「これ以上レスがあるスレは強制的にsage」実装
  - 実装したいものは全部実装した気がする

### [2020/06/10]

- config.php整理
  - プロキシ規制、連続投稿秒数を実装しない

### [2020/06/09] v0.30.0

- 本文検索にレスも対応（要テーマ更新）

### [2020/06/09]

- neo更新
- テーマも更新

### [2020/06/08] v0.29.3

- 記事編集でハッシュタグのリンクが消えるの修正

### [2020/06/08] v0.29.2

- 本文検索のバク修正

### [2020/06/08] v0.29.1

- レス画面でリンクがある場合などにその文字列が一番上に現れることがあるの修正（テーマ）

### [2020/06/08] v0.29.0

- ハッシュタグ検索をスマートに（テーマ要更新）
  - 0.28.0のハッシュタグリンクは使えなくなってます。。。

### [2020/06/08] v0.28.0

- ハッシュタグ検索機能追加（テーマ、config要更新）

### [2020/06/07] v0.27.1

- 作者名検索修正

### [2020/06/07] v0.27.0

- 作者名検索実装
  - 名前からのリンクで検索は見送り

### [2020/06/06] v0.26.0

- カタログモード実装（要テーマ更新、template_ini.phpも）

### [2020/06/06] v0.25.0

- 「指定日数を過ぎたスレのスレフォームを消す」実装（テーマにも依存）
  - レス画面を手打ちしたらレスできるのを阻止

### [2020/06/06] v0.24.3

- コード整理
- セキュリティ強化

### [2020/06/06] v0.24.2

- 変数を二重取得している場所を削除

### [2020/06/06] v0.24.1

- 管理者モードでのページングがセキュリティ上できないので削除（テーマ、config要更新）

### [2020/06/06] v0.24.0

- 描画時間表示設定ON時にユーザー側で隠せる設定追加（テーマ、config要更新）

### [2020/06/05] v0.23.0

- レス省略表示対応（テーマ、config要更新）
- テーマ更新

### [2020/06/05] v0.22.11

- コード整理
- バージョン表記を元に戻した

### [2020/06/04] v0.22.10.200604.2

- 画像差し替え時のpaint画面のパスワード暗号化

### [2020/06/04] v0.22.9.200604.1

- 「そろそろ消えるボーダー」実装（テーマ要更新）

### [2020/06/04] v0.22.8.200604.0

- 「指定日数を過ぎたスレのレスボタンを消す」実装（テーマにも依存）
- バージョン表記変更(日付も付けた)

### [2020/06/04] v0.22.7

- 画像を新規投稿→ブラウザバック→また投稿の場合、二重投稿とみなすようにした

### [2020/06/04] v0.22.6

- 管理モードでも存在しない記事番号を編集/削除しようとしたらphpエラーになってたのを修正
- スレがない時に二重投稿チェックが発動してエラーになっていたの修正
- コード整理

### [2020/06/04] v0.22.5

- 二重投稿のチェックをちょっと緩くした
- 不正投稿チェック導入(GETでの投稿)

### [2020/06/04] v0.22.4

- 画像差し替え時のパスワード照合を(念のため)2回に

### [2020/06/04] v0.22.3

- 「レス時にスレタイトル引用」対応(テーマ更新も必要)
- 本文等必須の時に必須マークを出す(テーマ更新も必要)

### [2020/06/04] v0.22.2

- お絵かきの最小幅と高さが0になっていたの修正
- `$addinfo`対応（config.php、デフォルトテーマ更新もあるよ）

### [2020/06/04] v0.22.1

- 最後のページにスレ数0のページができることがあるのを阻止
- 存在しない記事番号を編集/削除しようとしたらphpエラーになるのを修正

### [2020/06/04] v0.22.0

- 全ページの全レスを取得していたのを1ページのレスに改善

### [2020/06/03] v0.21.1

- 続きを描くのパス欄にCookieが入らないの修正
  - テーマも変わってますよ！

### [2020/06/03]

- 標準テーマ「MONO」
- テーマ修正
  - もうすぐ新しいテーマ作ります（いまのはnee3にする予定）

### [2020/06/02]

- loadcookie.js with文の見直し
- 「レスの投稿者名をコピー」実装（テーマレベル）

### [2020/06/02] v0.21.0

- 画像差し替え失敗専用エラー画面追加
  - 今度こそテンプレートのフォーマットが固まった気がする

### [2020/06/02] v0.20.0

- 続きから描くの画像差し替え実装
  - テンプレートのフォーマットが固まった気がする

### [2020/06/02] v0.19.0

- 「続きから描く」を新規投稿のみ実装
  - ~~差し替えはなぜかユーザーコードが一致しないのでできない~~ →俺のミス

### [2020/06/01]

- picpost.phpを最新版に差し替え

### [2020/06/01] v0.18.3

- 編集と削除できなくてもOK画面になってたの修正。

### [2020/06/01] v0.18.2

- 日付フォーマット(テーマ依存)

### [2020/06/01] v0.18.1

- 書き込み/編集成功時にOK画面を出す

### [2020/06/01] v0.18.0

- いくつかのエラーでエラー画面が出るようにした
  - システムメッセージが見れない… → 投稿成功画面つくる…？
- 管理モードinにもテンプレートを適用
- テーマ修正(動画のないファイルでもレス画面では動画があるように表示される)

### [2020/05/31] v0.17.2

- 二重投稿対策

### [2020/05/31] v0.17.1

- cookieのパスワードにハッシュ化されたものが保存されていたの修正
- ~~連続投稿に確認アラートを出す~~

### [2020/05/31]

- テーマのjavascript、描画時間関連修正

### [2020/05/31] v0.17.0

- レスできないの修正
- スレ立てできないの修正
- 編集モード搭載

### [2020/05/29] v0.16.0

- 改行が反映されないの修正
- 連続改行をまとめる機能搭載
- オートリンク実装
- 「本文中にURLがあると拒絶」実装
- 「本文中に日本語がないと拒絶」実装
- 「拒絶する文字列」「使用できない名前」実装
- 「AとBが両方あったら拒絶」実装
- 「名前」「本文」「題名」必須、および長さの最大文字数実装
- 「拒絶するホスト」実装
  - セキュリティ関連はこれでOKかなあ

### [2020/05/29] v0.15.0

- 「データベース上からデータは消えるが画像ファイルが消えない」解決
- 画像がないスレが建てられるのを（テーマレベルで）阻止
- おまけテーマは落ち着くまで削除

### [2020/05/29] v0.14.1

- 動画保存しない設定ができなかったの修正
- その他テーマのエラー修正

### [2020/05/29] v0.14.0

- しぃペインター対応！！！！！！！！(要config再設定)

#### 今後の予定

- 続きから描く対応 (差し替え/新規投稿) →OK
- 記事編集 →OK
- セキュリティ

### [2020/05/29] v0.13.11

- 削除くんが動くようになった

### [2020/05/29] v0.13.10

- 問題整理

### [2020/05/29] v0.13.9

- コード整理
- しぃペインターを使う準備までできた

### [2020/05/29] v0.13.8

- 管理画面に画像リンク追加
- config整理
  - 動画保存専用ディレクトリの廃止
- しぃペインター実装に向け各種ファイル同梱

### [2020/05/29] v0.13.7

- 「そうだね」実装
- テーマ修正

### [2020/05/28] v0.13.6

- 描画時間表示対応
- メールのリンク対応

### [2020/05/28] v0.13.5

- テーマのエラー修正
  - しぃペインター対応始めるかなー

### [2020/05/28] v0.13.3

- レス省略設定のデフォルトが間違っていたの修正(テーマ)

### [2020/05/28] v0.13.2

- 1ページ内のレス表示数設定(要config再設定)
  - 省略の法則性が分からない…

### [2020/05/28] v0.13.1

- ページング処理大丈夫でした configのデフォルト値整理

### [2020/05/28] v0.13.0

- 最大ログ数実装（したつもり）
- ~~ページング処理がうまくいってない~~
- config.php更新。互換性がなくなっています。

### [2020/05/28] v0.12.0

- age/sage機能実装！ age/sage機能実装！
  - 「これ以上レスがあると強制sage」は実装できないかも

### [2020/05/28] v0.11.2

- 管理モードのpassがない時のエラー修正

### [2020/05/28] v0.11.1

- テーマに管理モードinのリンクを付けた

### [2020/05/28] v0.11.0

- 1ファイルにまとめた！
- sage機能のためにまたデータファイル形式変わりました…すみません

### [2020/05/27]

- .htaccess追加
- サンプルのリンク修正

### [2020/05/27] v0.10.0

- MySQLからSQLiteに変更
- setupdb.php、dbconnect.php廃止
- `$usercode`関連のエラーが出る（ファイルを1つにまとめたら治るかも）→ 治った

### [2020/05/27] v0.9.1

- smartyを最新版に更新
- NEO更新

### [2019/05/19] v0.9.0

- smartyに変更。

### [2019/05/19] スキンv0.2.0

- ダイナミックパレット搭載。

### [2019/05/17] v0.8.5

- スキン修正x2。

### [2018/12/28] v0.8.5

- URL自動リンク実装。

### [2018/12/27] v0.8.4

- 管理モードスクリプトにレスが表示されないの修正。

### [2018/12/27] v0.8.3

- 削除ができなくなっていたのをさらに修正。

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
- ~~noeadmin.php?adminpass=(管理者パス)をURLに直打ちして入ってください。~~
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

- 管理モード　→ OK
- URL自動リンク → OK
- pch保存/再生 → OK
- セキュリティ向上 →OK?

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

### [2018/12/24] v0.2.0

- ログをmySQLのデータベースに変更

### [2018/09/20] v0.1.1

- スレッド式にするためにログに通し番号を付けた（ログの形式が変わりました注意）

### [2018/09/20] v0.1.0

- 画像の投稿ができるようになりました！！やった！！！！！！

### [2018/09/20] v0.0.3

- 一時保存フォルダに画像を保存するまでできた（最初の画面に反映できない）
- スキンをフォルダに格納

### [2018/09/20] v0.0.2

- 投稿画面を出すまでできた（保存はできない）

### [2018/09/19] v0.0.1

- プロジェクト開始
- とりあえずSkinnyを動かせる掲示板を作った（削除も何もできないけど）
