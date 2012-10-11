<?php

session_start();
$U = $_POST['U'];
$S = $_POST['S'];
$D = $_POST['D'];
$source_file = '9bZkp7q19f0.mp4';

//$download = "youtube-dl " . $U;
//exec($download);

//$string = "/home/ubuntu/RubyScript " . " '" . $U . "' " . $S . " " . $D;
// 'mplayer -vo gif89a:15.0:movie.gif file.mpeg'
$string =  "mplayer 9bZkp7q19f0.mp4 -nosound -vo gif89a:fps=12:output=output.gif -vf scale='550:309' -ss ". $S ." -endpos ". $D;
//exec($string);

echo "$string";
//echo "$download";

?>