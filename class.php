<?php
class Review{

  private static $review_count =0;

  public static function get_review_count(){
    return Review :: $review_count;
  }
  public function __construct(){
    Review :: $review_count += 1;
  }

public function write_review(){
  echo "タイトルを入力して下さい\n";
    $this->title = trim(fgets(STDIN));
    echo "ジャンルを入力して下さい\n";
    $this->genre =trim(fgets(STDIN));
    echo "感想を入力して下さい\n";
    $this->impression = trim(fgets(STDIN));
}
  public function show_review(){
    $line = "---------------------\n";
    echo "ジャンル : {$this->genre}\n{$line}\n";
    echo "タイトル : {$this->title}\n{$line}\n";
    echo "感想 : {$this->impression}\n{$line}\n";
  }
}

while (true){
  echo "書いたレビューの数" . Review :: get_review_count() , PHP_EOL;
  echo "[0]レビューを書く\n[1]アプリを終了\n";
  $input = intval(trim(fgets(STDIN)));
  if ($input === 0) {
    $review = new Review();
    $review->write_review();
    $review->show_review();

  }
  elseif ($input === 1){
    exit;
  }
  else{
    echo "無効な値です";
  }
}



?>