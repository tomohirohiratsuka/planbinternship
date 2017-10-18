<?php
function movietheater($movie, $select){

echo "$movie[$select]\n";
}
$movie = array("title" => "ハリーポッター","genre" => "ファンタジー","year" =>"2001年");
echo "以下から一つを選んで入力してください\n";
echo "> title\n> genre\n> genre\n";
$select = trim(fgets(STDIN));
movietheater($movie, $select);

?>