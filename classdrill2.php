<?php
class Fruits{
  public static $sum = 0;

  public static function get_sum()
  {
   echo "合計の価格は". Fruits :: $sum .  "円です。\n";
  }
  function __construct($name,$price){
    Fruits :: $sum += $price;
    $this->name =$name;
    $this->price =$price;

   }
  }

$apple = new Fruits("りんご",120);
$orange = new Fruits("オレンジ",200);
$strawberry = new Fruits("いちご",60);

Fruits :: get_sum();

?>