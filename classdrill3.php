<?

class Food{
 static $foods =array();

 function __construct($name,$calory){
  $this->name =$name;
  $this->calory = $calory;
 }

  static function input(){
    echo "料理名を入力して下さい\n";
    $name = trim(fgets(STDIN));
    echo "カロリーを入力して下さい\n";
    $calory = trim(fgets(STDIN));

    $food = new Food($name, $calory);
    array_push(Food::$foods,$food);
  }

  static function show_all_calory(){
    $all_calory = 0;
    $line = "------------\n";
    echo $line;

    foreach (Food::$foods as $food) {
      echo $food->name . ":" . $food->calory . "kcal\n";
      $allcalory += $food->calory;
    }

    echo $line;
    echo "カロリー合計 : " . $allcalory . "kcal\n";
  }

}

while (true) {
  echo "[0] : カロリーを入力する\n";
  echo "[1] : カロリーの合計を見る\n";
  $input = trim(fgets(STDIN));

  if($input == 0){
    Food::input();
  }else if ($input == 1){
    Food::show_all_calory();
    exit;
  }
}

?>