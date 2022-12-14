<?php
/*めんどくさくなったので一旦$にします
//ホストサーバー
define("HOST", "localhost");
define("TIMEOUT", "1");
define("PORT", "443");
//仮想サーバー1 (別のサーバー)
define("VHOST", "null");
define("TIMEOUT1", "null");
define("VPORT", "443");
//仮想サーバー2 (別のサーバー)
define("VHOST2", "null");
define("TIMEOUT2", "null");
define("VPORT2", "443");
*/
/*サーバー死活監視の設定ファイル*/
/*ホストサーバー*/
/*ポート番号*/
$port = '443';
/*ping送信回数*/
$timeout = '1';
/*ping送信先*/
$host = 'localhost';
/*仮想サーバー1*/
/*ポート番号*/
$vport = '443';
/*ping送信回数*/
$timeout2 = '1';
/*送信先*/
$vhost1 = '';
/*仮想サーバー2*/
/*ポート番号*/
$vport2 = '443';
/*ping送信回数*/
$timeout3 = '1';
/*送信先*/
$vhost2 = '';
/*画像URL設定*/
$domain = $_SERVER['HTTP_HOST'];
/*hostヘッダがないや動かない場合は下のコードを有効化し上のコードを無効化*/
//$domain = $_SERVER['SERVER_NAME'];
/*自分でドメインの設定*/
//$domain = "";
?>