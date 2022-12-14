# 簡単なステータス
簡単なコードで書かれています。

## 機能
サーバーステータスの確認

アクセスログ

## 使い方

### config

config/config.phpにある

$port = '443';

$timeout = '1';

$host = 'localhost';

を変更してください。

違うサーバーを監視したい場合は"$vport"などを変更してください

### ログ

index.phpにアクセスがあるとログファイルが生成されます。

ログはlogディレクトリに保存されます。

### ログローテーション

1日に1回pc_log_rotate.php,mobile_log_rotate.phpをcronなどで実行してください

## ソースコード元

参考させていただきました。(ほぼコピペ)

死活監視

https://blog.verygoodtown.com/2012/05/php-ping-script-to-check-remote-server-or-website/

アクセスログ

https://www.webcyou.com/?p=6883

ログローテーション

https://qiita.com/AoiLaurent/items/40a2c7e766552c7a9ce9
