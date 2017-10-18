<?php
function fruitsbasket($fruit, $num){
  echo "{$num}番目の要素は{$fruit[$num-1]}\n";
}

$fruits_box = array("apple","orange","cherry");
echo"何が出るかな？？？数字を入力してね！\n";
$num = trim(intval(fgets(STDIN)));
fruitsbasket($fruits_box, $num);



?>