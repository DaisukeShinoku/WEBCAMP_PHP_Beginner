<?php
function fizzBuzz(int $max){
  for($i = 1; $i <= $max; ++$i) {
    if(($i % 15) === 0)
    {
      echo "FizzBuzz \n";
    }
    elseif(($i % 5) === 0)
    {
      echo "Buzz \n";
    }
    elseif(($i % 3) === 0)
    {
      echo "Fizz \n";
    }
    else {
      echo "{$i} \n";
    }
  }
}

FizzBuzz(50);