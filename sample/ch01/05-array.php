<?php
/**
 * 配列
 */

// 配列の基本形
// (PHP5.4)配列の短縮表記([])
// 数値配列
$a = [1, 2];
var_dump($a); // array(2) { [0]=> int(1) [1]=> int(2) }

// 連想配列
$b = [
    "a" => "b",
    "c" => "d",
];
var_dump($b); // array(2) { ["a"]=> string(1) "b" ["c"]=> string(1) "d" }
