<?php
trait ThisIsTrait
{
  public function trait_method()
  {
    echo "トレイトのメソッド \n";
  }
}

class ThisIsClass
{
  use ThisIsTrait;

  public function class_method()
  {
    echo "クラスのメソッド \n";
  }
}

$obj = new ThisIsClass();
$obj->class_method();
$obj->trait_method();