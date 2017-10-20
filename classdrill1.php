<?php
class Dog{
  public static $type = "犬";
  function __construct(){
  $this->name = "マロン";
  $this->dog_type = "トイプードル";
}
  public static function say(){
    echo "わんわん\n";
  }
  static function say_type(){
    echo "私は". Dog :: $type . "です。\n";
  }

  public  function self_introduction(){
    echo "私の名前は{$this->name}で,種類は{$this->dog_type}です。\n";
  }
}

Dog :: say_type();
Dog :: say();
$dog = new Dog();

$dog->self_introduction();

?>