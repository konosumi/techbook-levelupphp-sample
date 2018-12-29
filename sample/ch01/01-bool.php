<?php
/**
 * 論理型
 */

// 論理型の基本形です
$a = true;
$b = false;
// gettypeは変数の型を返します
echo gettype($a).PHP_EOL; // boolean

$c = 1;
$d = 2;
// 比較をした結果は真偽値になります
// var_dumpは変数の内容を出力するコマンドです
var_dump($c == $d); // bool(false)
var_dump($c > $d);  // bool(false)
