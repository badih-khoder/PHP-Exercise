<?php


function digits($num) 
{
return strlen((string)$num);
}

$num=500;
echo "nb of digits is :" .digits($num);
?>