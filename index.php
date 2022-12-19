<?php 
include_once ('./config/config.php');
include_once ('./pc_log.php');
$user = $_SERVER['HTTP_USER_AGENT'];
if (preg_match("/iPhone|iPod|Android.*Mobile|Windows.*Phone/", $user)) {
    header('Location: ./mobile/index.php');
    exit;
}else{
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>ステータス</title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class=txt>
<div class=img><a href="https://<?php echo $domain;?>"><img src="./img/home.png" width="150" height="50" alt="img"></a></div>
<h2 style="text-align:left;">ステータス</h2>
<p style="text-align:left;">サーバーステータス</p>
</div>

<div class=box>
<div class=color>
<iframe src="./host.php" width="900" height="40">
</iframe>
</div>
</div>

<div class=lf>
<div class=mb>
<p>PC版</p>
</div>
</div>
</body>
</html>
<?php } ?>