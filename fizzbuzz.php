<?php
function fizz_buzz(){
  $num = 1;
  while ($num <= 100){
    if($num%3 == 0 && $num%5 == 0) {
      echo "FizzBuzz\n";
    }
    elseif($num%5 == 0){
      echo "Buzz\n";
    }
    elseif ($num%3 == 0){
      echo "Fizz\n";
    }
    else{
      echo $num . "\n";
    }
     $num += 1;
  }
}

fizz_buzz();
?>