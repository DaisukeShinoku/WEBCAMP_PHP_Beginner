<?php
class FizzBuzz
{
  private $max;

  public function setMax(int $max)
  {
    $this->max = $max;
  }
  public function exec()
  {
    for($i = 1; $i <= $this->max; ++$i) {
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
}

$obj = new FizzBuzz();
$obj->setMax(50);
$obj->exec();
