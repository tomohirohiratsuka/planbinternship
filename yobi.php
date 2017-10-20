<?php
function get_day($year, $month){
  $month_days = array(31,28,31,30,31,30,31,31,30,31,30,31);
  if($month == 2){
  if($year%4 == 0){
    if($year%100 == 0 && $year%400 != 0){
      $days = 28;
    }
    else{
      $days =29;
    }
  }
  else{
    $days = 28;
  }
 }
  else{
    $days = $month_days[$month - 1];
  }
  return  $days;
}

function get_week($year,$month,$day){
$yearindex = $year - 1;
$days = 0;
$weeks = array("月","火","水","木","金","土","日");
while ($yearindex > 0){
  if (get_day($yearindex,2) == 29){
    $days += 366;
  }
  else{
    $days += 365;
  }
  $yearindex -= 1;

}


$monthindex = $month - 1;
while ($monthindex > 0){
  $month_days = get_day($year, $monthindex);
  $days += $month_days;
  $monthindex -= 1;
}
$days += $day;

return $weeks[($days-1)%7];
}





echo "年を入力して下さい : ";
$year =trim(fgets(STDIN));
echo "月を入力して下さい : ";
$month =trim(fgets(STDIN));
echo "日を入力して下さい";
$day = trim(fgets(STDIN));

$week = get_week($year,$month,$day);
echo "{$year}年{$month}月{$day}日は{$week}曜日です\n";

?>