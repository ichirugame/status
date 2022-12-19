<?php
//ホストサーバー
define("HOST", "localhost");
define("TIMEOUT", "1");
define("PORT", "443");
/*画像URL設定*/
$domain = $_SERVER['HTTP_HOST'];
/*hostヘッダがないや動かない場合は下のコードを有効化し上のコードを無効化*/
//$domain = $_SERVER['SERVER_NAME'];
/*自分でドメインの設定*/
//$domain = "example.com";
?>