<?php
//while (true) {
    date_default_timezone_set('Asia/Tokyo');
    $logPath = "./log";
    $logName = "mobile_access_log.txt";
    $saveDays = "3";
    foreach (scandir($logPath) as $file) {
        if (preg_match("/" . $logName . "\./", $file)) {
            $delPointDate = date('Ymd',strtotime("-". $saveDays ." day"));
            $backupLogDate = date("Ymd", filemtime($logPath . "/" . $file));
            if ($backupLogDate - $delPointDate < 0) {
                unlink($logPath . "/" . $file);
            }
        }
    }
    $sysDate = date("Ymd");
    if (file_exists($logPath)) {
        rename($logPath . "/" .  $logName, $logPath . "/" .  $logName . "." . $sysDate);
    }
    touch($logPath . "/" .  $logName);
//sleep(86400);
//}
?>
