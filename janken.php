<?php
function janken(){


echo "[0] : グー\n";
echo "[1] : チョキ\n";
echo "[2] : パー\n";

$yours = trim(fgets(STDIN));
$mine = rand(0,2);
$jankens = array("グー","チョキ","パー");
echo "あなたの手 : {$jankens[$yours]}, 私の手 : {$jankens[$mine]}\n";


if($mine == $yours){
  echo "あいこで...\n";
  return true;

}

elseif ($mine == 0 && $yours == 1 || $mine == 1 && $yours == 2 || $mine == 2 && $yours == 0){
  echo "あなたの負けです\n";
  return false;
}


else{
  echo "あなたの勝ちです。\n";
  return false;
}
}

echo "最初はグー、じゃんけん...\n";






$nextgame = true;
while($nextgame ){
  $nextgame = janken();
}



?>