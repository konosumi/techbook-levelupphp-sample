<?php
/**
 * 変数の内容を出力する
 */
$array = ['a', 'b'];
var_dump($array);
echo '=========='.PHP_EOL;
var_export($array);
echo PHP_EOL.'=========='.PHP_EOL;
print_r($array);

// 文字列として変数に格納したい場合
$result = var_export($array, true);
$result = print_r($array, true);

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