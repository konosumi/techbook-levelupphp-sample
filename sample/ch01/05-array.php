<?php
/**
 * 配列
 */

 // 配列の定義
 // PHP5.3までの配列定義
$array = array(1, 2, 3);
// (PHP5.4)短縮構文を使った配列定義
$array = [1, 2, 3];

// 数値配列の基本形
$a = [1, 2];
// array(2) {[0]=> int(1) [1]=> int(2)}
var_dump($a);

// 連想配列の基本形
$b = [
    "a" => "b",
    "c" => "d",
];
// array(2) {["a"]=> string(1) "b" ["c"]=> string(1) "d"}
var_dump($b);
