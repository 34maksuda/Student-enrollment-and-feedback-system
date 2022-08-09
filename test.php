<?php 
$T = "Hello hi (HSTU)";
$HSTU = substr($T,strpos($T,"(")+1);

echo trim($HSTU,")"); 
?>