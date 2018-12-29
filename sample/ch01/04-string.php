<?php
/**
 * 文字列型
 */

$a = 'abc';
$b = 'あいうえお';
echo gettype($a).PHP_EOL; // string
var_dump($b); // string(15) "あいうえお"
