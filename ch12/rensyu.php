<?php

class MyTest
{
  private $i;
  private $j;

  public function __construct(int $i, int $j)
  {
    $this->i = $i;
    $this->j = $j;
  }

  public function add() :int
  {
    return $this->i + $this->j;
  }

  public function sub() :int
  {
    return $this->i - $this->j;
  }
}

$obj = new MyTest(3, 4);
echo $obj->add(), "\n";
echo $obj->sub(), "\n";

class MyTest2
{
  private $price;
  private $name;

  public function set_price(int $price)
  {
    $this->price = $price;
  }

  public function get_price() :int
  {
    return $this->price;
  }

  public function set_name(string $name)
  {
    $this->name = $name;
  }

  public function get_name() :string
  {
    return $this->name;
  }
}

$obj = new MyTest2();

$obj->set_price(100);
$obj->set_name("コーラ");

$price = $obj->get_price();
$name = $obj->get_name();

echo "{$name}が{$price}円で売っている \n";

