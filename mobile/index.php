<?php
include_once ('../config/config.php');
include_once ('../mobile_log.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>ステータス</title>
<link rel="stylesheet" href="../css/mobile.css">
</head>
<body>
<div class=txt>
<div class=img><a href="https://<?php echo $domain;?>"><img src="../img/home.png" width="100" height="90"></a></div>
<h2 style="text-align:left;">ステータス</h2>
<p style="text-align:left;">サーバーステータスページ</p>
</div>
<div class=box>
<div class=color>
<iframe src="../host.php" width="300" height="50">
</iframe>
</div>
</div>

<div class=box>
<div class=color>
<iframe src="../vhost1.php" width="300" height="50">
</iframe>
</div>
</div>

<div class=box>
<div class=color>
<iframe src="../vhost2.php" width="300" height="50">
</iframe>
</div>
</div>
<div class=mb>
<p>モバイル版</p>
</div>
</body>
</html>
