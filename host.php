<html>
<?php
/*ホストサーバー監視*/
include_once ('./global.php');
include_once ('./config/config.php');
?>
<?php
function ping($host,$port,$timeout)
{
   $fsock = fsockopen($host, $port, $errno, $errstr, $timeout);
   if ( ! $fsock ) {
   return FALSE;
  } else{
     return TRUE;
  }
  }
$up = ping($host,$port,$timeout);
?>
<?php
echo "ホストサーバー : ";
echo "<div class=box; style=display:inline-block; _display:inline;>";
echo $up ? '<div class=color style=display:inline-block; _display:inline;>正常稼働中' : '<div class=error>サーバー応答なし<div>';
?>
</div>
</html>
