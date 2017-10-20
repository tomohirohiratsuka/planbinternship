<?php
function input_score(){
  $score = array(); //連想配列
  echo "生徒の名前を入力して下さい";
   $score["name"] = trim(fgets(STDIN));
  echo "得点を入力してください";
   $score["score"] = trim(fgets(STDIN));

   return $score;
}

function show_all($a_scores){
  $sum = 0;
  $line = "----------------\n";
  echo $line;

  foreach ($a_scores as $key => $value) {
    $sort[$key] = $value["score"];

  }

  array_multisort($sort,SORT_DESC,$a_scores);
  foreach ($a_scores as $score) {
    echo "{$score["name"]} : {$score["score"]}点\n";
    $sum += $score["score"];
  }
echo $line;
echo "平均得点 : " . $sum/count($a_scores) . "点\n";
}

$scores = array(); //添字配列
while (true){
echo "得点を入力しますか:[0]Yes [1]No\n";
$input = trim(fgets(STDIN));
if ($input == 0 ){
array_push ($scores ,input_score());
}

elseif ($input == 1){
  show_all($scores);
  exit;
 }
}

?>