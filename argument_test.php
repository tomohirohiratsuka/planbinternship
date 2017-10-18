<?php

function puton($something){
  echo $something . "!\n";
}
echo "何か入力してください。。。\n";
$input = trim(fgets(STDIN));
puton($input);

?>