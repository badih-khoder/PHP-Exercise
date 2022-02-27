<?php
function greaterFn($num){
$r = $num > 30
? "$num greater than 30"
: ($num > 20
? "$num greater than 20"
: ($num >10
? " $num greater than 10"
: "$num is less than 10")); 


echo $num.":" .$r ."\n" ;

}
greaterFn(32);
greaterFn(21);
greaterFn(12);
greaterFn(1);
?>