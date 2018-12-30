<?php
/**
 * 論理型(boolean)
 */

// 論理型の基本形
$a = true;
$b = false;
echo gettype($a).PHP_EOL; // boolean

// 比較をすると真偽値が返却されます
$c = 1;
$d = 2;
var_dump($c === $d); // bool(false)
var_dump($c > $d);   // bool(false)
