<?php
function cal($num1, $num2){
  $result = $num1 * $num2;
  echo $result . "\n";
}
echo "最初の数を入力してください\n";
$num1 = intval(fgets(STDIN));
echo "2番目の数を入力してください\n";
$num2 = intval(fgets(STDIN));

cal($num1, $num2);


?>