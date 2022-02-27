<?php
function palindrome($word)



{
  if ($word = strrev($word))
  echo   strrev($word) . " is strrev " ;
else {
  echo "is not  strrev";
}

}

palindrome("abc");
