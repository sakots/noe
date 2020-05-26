<?php

//設定の読み込み
require("config.php");
require("template_ini.php");


try {
	if (file_exists(LOGDB) == FALSE) {
		// はじめての実行なら、テーブルを作成
		$db = new PDO("mysql:dbname=".LOGDB.";host=".DBHOST.";charset=utf8",DBUSER,DBPASS);
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  
		$sql = "CREATE TABLE ".TABLE."(tid integer primary key auto_increment, created DATETIME, modified TIMESTAMP, name VARCHAR(".MAX_NAME."), mail VARCHAR(".MAX_EMAIL."), sub VARCHAR(".MAX_SUB."), com VARCHAR(".MAX_COM."), url VARCHAR(".MAX_URL."), host TEXT, exid TEXT, pwd TEXT, utime INT, picfile TEXT, pchfile TEXT, img_w INT, img_h INT, time TEXT, tree BIGINT, parent INT, invz VARCHAR(1))";
		$dh = $db->query($sql);
		$sql = "CREATE TABLE ".TABLETREE."(iid integer primary key auto_increment, tid INT, created DATETIME, modified TIMESTAMP, name VARCHAR(".MAX_NAME."), mail VARCHAR(".MAX_EMAIL."), sub VARCHAR(".MAX_SUB."), com VARCHAR(".MAX_COM."), url VARCHAR(".MAX_URL."), host TEXT, exid TEXT, pwd TEXT, utime INT, picfile TEXT, pchfile TEXT, img_w INT, img_h INT, time TEXT, tree BIGINT, parent INT, invz VARCHAR(1))";
		$dh = $db->query($sql);
	} else {
		$db = new PDO("mysql:dbname=".LOGDB.";host=".DBHOST.";charset=utf8",DBUSER,DBPASS);
	}
} catch (PDOException $e) {
	echo "DB接続エラー:" .$e->getMessage();
}

mkdir(IMG_DIR,0777);
mkdir(TEMP_DIR,0777);

echo "データベーステーブルとディレクトリが作成されました。";

?>