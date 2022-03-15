<?php
abstract class AbstractClass
{
  abstract public function abstract_method();

  public function normal_method()
  {
    echo "普通のメソッド \n";
  }
}

class ChildClass extends AbstractClass
{
  public function abstract_method()
  {
    echo "子クラスで実装した抽象メソッド \n";
  }
}

//$obj = new 抽象クラス(); // XXX これは出来ないので、コメントアウトを外すとエラーになる

$obj = new ChildClass();
$obj->normal_method();
$obj->abstract_method();