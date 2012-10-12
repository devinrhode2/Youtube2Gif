<?php

session_start();
$U = $_POST['U'];
$S = $_POST['S'];
$D = $_POST['D'];
$UID = $_POST['UID'];
$Time = time();
$G = $UID . $Time;

$string =  "mplayer ". $UID .".flv -nosound -vo gif89a:fps=12:output=". $G .".gif -vf scale='550:309' -ss ". $S ." -endpos ". $D;
exec($string);

echo $G;

?>