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
