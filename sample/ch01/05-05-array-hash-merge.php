<?php
/**
 * 連想配列の結合
 */
$array3 = ['fruits' => 'apple', 'code' => 'php'];
$array4 = ['fruits' => 'oprange', 'drink' => 'beer'];

// fruitsは重複していますが、左側が優先されます
// [["fruits"]=> "apple" ["code"]=> "php" ["drink"]=> "beer"]
var_dump($array3 + $array4);

// fruitsは重複していますが、右側が優先されます
// [["fruits"]=> "oprange" ["code"]=> "php" ["drink"]=> "beer"]
var_dump(array_merge($array3, $array4));
