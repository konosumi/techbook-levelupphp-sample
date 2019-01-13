<?php
/**
 * 連想配列の結合方法による違い
 */
$array3 = ['fruits' => 'apple', 'code' => 'php'];
$array4 = ['fruits' => 'oprange', 'drink' => 'beer'];

// fruitsは重複していますが、左側が優先されます
// [["fruits"]=> "apple" ["code"]=> "php" ["drink"]=> "beer"]
var_dump($array3 + $array4);

// fruitsは重複していますが、右側が優先されます
// [["fruits"]=> "oprange" ["code"]=> "php" ["drink"]=> "beer"]
var_dump(array_merge($array3, $array4));

/** array_merge()は要素名の数値を整頓してしまう **/
$array5 = ['11' => 'a'];
$array6 = ['22' => 'b', '3c' => 'd'];
// [11]=> "a" [22]=> "b", ["3c"]=> "d"
var_dump($array5 + $array6);

// [0]=> "a" [1]=> "b",  ["3c"]=> "d"
var_dump(array_merge($array5, $array6));
