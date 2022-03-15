<?php
class Hoge
{

  private static $hensu;

  public static function this_is_static_method()
  {
    echo "静的なメソッド \n";
  }

  public static function sethensu($v)
  {
    static::$hensu = $v;
  }
  public static function gethensu()
  {
    return static::$hensu;
  }
}

Hoge::this_is_static_method();

Hoge::sethensu("set string");
echo Hoge::gethensu(), "\n";