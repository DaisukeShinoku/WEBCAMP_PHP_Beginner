<?php
class ParentClass
{
  public function parent_method()
  {
    echo "親クラス 内 親メソッド \n";
  }
  public function method()
  {
    echo "親クラス 内 メソッド \n";
  }
}

class ChildClass extends ParentClass
{
  public function child_method()
  {
    echo "子クラス 内 子メソッド \n";
  }
  public function method()
  {
    echo "子クラス 内 メソッド \n";
  }
}
$obj = new ChildClass();
$obj->parent_method();
$obj->child_method();
$obj->method();
