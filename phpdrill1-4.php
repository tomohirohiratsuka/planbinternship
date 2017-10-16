<?php
$data = array("name" => "takashi", "score" => array("english" => 46,"math" => 80,"japanese"=> 90),"age" =>15);
echo $data[0];
echo $data[1][1];
$total =  $data["score"]["english"] + $data["score"]["math"] + $data["score"]["japanese"] ;
echo "takashi's mark totaled" . $total . ", the average mark is " .$total/3 . "\n";


?>
