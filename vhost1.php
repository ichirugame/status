<html>
<?php
include_once ('./global.php');
include_once ('./config/config.php');
?>
<?php
function ping($vhost1,$vport,$timeout2)
{
 $fsock1 = fsockopen($vhost1, $vport, $errno, $errstr, $timeout2);
 if ( ! $fsock1 ) {
 return FALSE;
} else{
   return TRUE;
}
}
$up1 = ping($vhost1,$vport,$timeout2);
?>
<?php
echo "仮想サーバー1 : ";
echo "<div class=box; style=display:inline-block; _display:inline;>";
echo $up1 ? '<div class=color style=display:inline-block; _display:inline; text-align: right;>正常稼働中' : '<div class=error>サーバー応答なし<div>';
?>
</div>
</html>
