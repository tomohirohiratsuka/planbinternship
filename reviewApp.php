<?php
function post_review($a_posts) {
$post = array();
echo "ジャンルを入力してください :\n";
$post['genre'] = trim(fgets(STDIN));
echo "タイトルを入力してください :\n";
$post['title'] = trim(fgets(STDIN));
echo "感想を入力してください : \n";
$post['review'] =trim(fgets(STDIN));
$line = "-------------------";


echo "ジャンル : {$post['genre']}\n{$line}\n";
echo "タイトル : {$post['title']}\n{$line}\n";
echo "感想 : \n {$post['review']}\n{$line}\n";

$a_posts[] = $post;
return $a_posts;
}


function read_reviews($a_posts){
 $number = 0;
 foreach($a_posts as $post){

  echo "[{$number}]:{$post['title']}のレビュー\n";
  $number += 1;
}
echo "見たい項目の数字を入力してください";
$input = intval(trim(fgets(STDIN)));

$post = ($a_posts[$input]);
$line = "-----------------------";
echo "ジャンル : {$post['genre']}\n{$line}\n";
echo "タイトル : {$post['title']}\n{$line}\n";
echo "感想 : \n {$post['review']}\n{$line}\n";



}

function end_program(){
 exit;
}

function exception(){
  echo "無効な値です。";
}

$posts = array();

while (true) {


echo "下記の数字を入力してください\n";
echo "レビュー数 : " . count($posts). "\n";
echo "[0]レビューを書く\n";
echo "[1]レビューを読む\n";
echo "[2]アプリを終了する\n";
$input = intval(trim(fgets(STDIN)));




if ($input === 0){
  $posts = post_review($posts);


}
elseif ($input === 1) {
  # code...
  read_reviews($posts);
}
elseif ($input === 2) {
  # code...
  end_program();
}
else{
  exception();
}



}



?>