<?php

// 論理型の基本形です
$a = true;
$b = false;
echo gettype($a).PHP_EOL; // boolean

// 比較をした結果は真偽値になります
// var_dumpは変数の内容を出力するコマンドです
$c = 1;
$d = 2;
var_dump($c == $d); // bool(false)
var_dump($c > $d);  // bool(false)
