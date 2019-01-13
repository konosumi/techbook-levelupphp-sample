<?php
/**
 * 配列の並び替え方法による違い
 */

// sort()では連想配列が維持されない
$array = ['c' => 'd', 'a' => 'b'];
sort($array);
// array(2) { [0]=> string(1) "b" [1]=> string(1) "d" }
var_dump($array);

// asort()では連想配列が維持される
$array = ['c' => 'd', 'a' => 'b'];
asort($array);
// array(2) { ["a"]=> string(1) "b" ["c"]=> string(1) "d" }
var_dump($array);
