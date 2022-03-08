<?php
function myfunc(int $val) {
  $val *= 2;
  echo "in myFunc, val is {$val} \n";
}

$i = 10;

myfunc($i);

echo "i is {$i} \n";