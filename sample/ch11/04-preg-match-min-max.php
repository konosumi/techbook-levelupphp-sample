<?php
/**
 * 最短マッチと最長マッチ
 */
$str = "abcccde";

// アスタリスク(*)は最短マッチです
// 結果： string(0) ""
preg_match('/(c*)/', $str, $matches);
var_dump($matches[1]);

// プラス(+)は最長マッチです
// 結果： string(3) "ccc"
preg_match('/(c+)/', $str, $matches);
var_dump($matches[1]);
