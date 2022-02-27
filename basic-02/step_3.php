<?php
$var1 = 15;
$var2 = 10;
echo "\n old nb:  ". $var1 . ',' . $var2;
list($var1, $var2) = array($var2, $var1);
echo "\nnew nb:  ". $var1 . ',' . $var2."\n";
