<?php
/**
 * 配列関数における無名関数(クロージャー)の応用
 */

$array = [1, 2, 3];

// 即席で作った無名関数を使い、配列の各要素を倍にする
// [0]=> int(2) [1]=> int(4) [2]=> int(6)
$func = function($v) { return $v * 2; };
var_dump(array_map($func, $array));

// または直接書くこともできる
var_dump(array_map(function($v) { return $v * 2; }, $array));
