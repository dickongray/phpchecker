<?php 
//this is a string $filename is a varible - sunrise.jpg (this is an image) is the string
$filename = 'sunrise.jpg';
//this is another varible  and using the substring function on a string. the argument of this function is ($stra, -3)
$isa  = substr($filename, -3);
//concatenate-strings
echo "The file extention is a ".$isa.".";



 ?>