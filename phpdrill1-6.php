<?php
$ary = array("shoebill","lungfish","gibbon");
$ary2 = array(5,6,7,8,9);
$ary3 = array();
foreach ($ary2 as $value2){
$value2 = $value2 + 10 ;
array_push($ary3, $value2);
//$ary3[] = $value2;
}
foreach($ary3 as $value2){
  echo $value2 . "\n";
}
echo "=====================\n";
var_dump($ary3);
//foreach ($ary as $value) {
//echo $value . "\n";
//}




?>