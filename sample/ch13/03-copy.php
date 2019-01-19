<?php
/**
 * コピーオンライト
 */

$a = str_repeat('a', 1000000);
echo 'メモリ割当量：'.memory_get_usage().PHP_EOL; // 1355808
$b = $a;
echo 'メモリ割当量：'.memory_get_usage().PHP_EOL; // 1355840

// $bが変更される瞬間に、変更前のコピーが作成される
// これをコピーオンライトと言う
$b .= 'b';
// コピーされたので、メモリの割当量が一気に増えた
echo 'メモリ割当量：'.memory_get_usage().PHP_EOL; // 2359360

/** オブジェクトの実体は共有される */
$c = new class { public $test; };
$c->test = str_repeat('c', 10);
$d = $c;
$d->test = str_repeat('d', 10);
echo $c->test.PHP_EOL; // dddddddddd

/** 値渡しと参照渡し */
function add1($i)  { $i += 10; }
// 変数の先頭に&で参照渡しになる
function add2(&$i) { $i += 10; }

// 値渡しでは、関数の呼び出し元の変数は変化しない
$j = 1;
add1($j);
echo $j.PHP_EOL; // 1

// 参照渡しでは、関数の呼び出し元の変数も変化する
$j = 1;
add2($j);
echo $j.PHP_EOL; // 11

/** 配列にも値渡しと参照渡しがあります */
function arr1($a)  { $a[0] = 0; }
function arr2(&$a) { $a[0] = 0; }

// 値渡し
$array = [1,2,3];
arr1($array);
// array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
var_dump($array);

// 参照渡し
$array = [1,2,3];
arr2($array);
// array(3) { [0]=> int(0) [1]=> int(2) [2]=> int(3) }
var_dump($array);
