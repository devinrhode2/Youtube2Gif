<?php

session_start();
$U = $_POST['U'];
$S = $_POST['S'];
$D = $_POST['D'];

$duration = $Duration-$StartTime;
$string = "exec (giftube ["+ $U +"] ["+ $S +"] ["+ $D +"])";
exec $string;

echo "$string";

?>
