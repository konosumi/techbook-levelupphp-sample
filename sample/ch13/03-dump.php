<?php
/**
 * 変数の内容の出力
 */

$array = ['a', 'b'];
var_dump($array);
echo '=========='.PHP_EOL;
var_export($array);
echo PHP_EOL.'=========='.PHP_EOL;
print_r($array);
/*  表示結果
array(2) {
  [0]=>
  string(1) "a"
  [1]=>
  string(1) "b"
}
==========
array (
  0 => 'a',
  1 => 'b',
)
==========
Array
(
    [0] => a
    [1] => b
)
*/