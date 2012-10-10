<?php

session_start();
$U = $_POST['U'];
$S = $_POST['S'];
$D = $_POST['D'];

$string = "home/ubuntu/RubyScript " . " '" . $U . "' " . $S . " " . $D;
exec($string);

echo "$string";

?>
