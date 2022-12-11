<html>
<?php
include_once ('./global.php');
include_once ('./config/config.php');
?>
<?php
function ping($vhost2,$vport2,$timeout3)
{
 $fsock = fsockopen($vhost2, $vport2, $errno, $errstr, $timeout3);
 if ( ! $fsock ) {
 return FALSE;
} else{
   return TRUE;
}
}
$up = ping($vhost2,$vport2,$timeout3);
?>
<?php
echo "仮想サーバー2 : ";
echo "<div class=box; style=display:inline-block; _display:inline;>";
echo $up ? '<div class=color style=display:inline-block; _display:inline; text-align: right;>正常稼働中' : '<div class=error>サーバー応答なし<div>';
?>
</div>
</div>
</html>
