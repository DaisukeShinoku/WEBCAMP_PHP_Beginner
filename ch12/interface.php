<?php
interface Aint
{
  public function methodA();
}
interface Bint
{
  public function methodB(int $i);
}
class Hoge implements Aint, Bint
{
  public function methodA()
  {
    echo "メソッドA \n";
  }
  public function methodB(int $i)
  {
    echo "メソッドB {$i} \n";
  }
}

$obj = new Hoge();
var_dump($obj);
$obj->methodA();
$obj->methodB(999);