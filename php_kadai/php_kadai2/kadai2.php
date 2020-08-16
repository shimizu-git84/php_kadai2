<?php
//$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
//もし違ったら「あなたの名前ではありません」と表示するように実装してくだ

$name = "Shimizu Masaya";
//　もし $name がShimizu Masayaなら、 ifのあとの{}　の中のコードが実行される。
// もし違ったら、 else のあとの{} の中のコードが実行される。
if  ($name == "ShimizuMasaya") {
    echo "私は ShimizuM asayaです。";
}   else {
    echo "Shimizu Masayaではありません。";
    echo "\n";
}

//=> "Shimizu Masayaではありません。" が表示される。

$total = 0;
echo $total;
echo "\n";
//=> 0 と表示される。

// $iが０から始まり、$iが１００００以下の間繰り返し処理を行う。
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";
//=> 50005000 と表示される。

# 配列のすべての要素を出力
$fruits = array("apple", "banana","orange", "kiwifruit","strawberry");

echo count($fruits);
echo "\n";
//=> 5 と表示される。

for ($i = 0; $i < count($fruits); $i++) {
    echo "要素は" . $fruits[$i];
    echo "\n";
}
//=> 要素はapple
//=> 要素はbanana
//=> 要素はorange
//=> 要素はkiwifruit
//=> 要素はstrawberry
//=> と表示される

//for文の始めの値を定義する
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for ($i = $start; $i <= $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if ($i % 5 == 0) {
    echo $i;
    echo "\n";
  }
}