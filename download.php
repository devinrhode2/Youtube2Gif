<?php 
session_start();

$clearcache = "rm /var/www/Giftest/*.flv";
exec($clearcache);

$UID = $_POST['UID'];
$Time = time();

$download = "youtube-dl -f 34 " . $UID;

exec($download);

?>