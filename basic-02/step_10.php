<?php
function palindrome($word)



{

  $x = strrev($word);
  if ($word == $x)
    echo   $x . " is strrev ";
  else {
    echo $x . " is not  strrev";
  }
}

palindrome("php");
