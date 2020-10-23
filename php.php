<?php

$str="Hello! My nmae is Ali. Coffee?";

$f=array('/is/' , '/coffee/');
$r=array('was' , 'tea');

$str=preg_replace($f[0] , $r[0] ,$str);
echo preg_replace($f[1], $r[1], $str);
?>