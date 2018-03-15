<?php
$num = 123; // initilize input here
$str_length = 4; // limit of unsigned zero
$str = substr("0000{$num}", -$str_length);
echo $str; // output

// function

function unsignedZero($num,$str_length = 4){
  $str = substr("0000{$num}", -$str_length);
  return $str;
}

// online demo
http://phpio.net/s/7836
