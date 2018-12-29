<?php
/**
 * 整数型
 */

// 整数型の基本形です
$a = 3;   // 正の整数
$b = 0;   // ゼロ
$c = -10; // 負の整数
echo gettype($a).PHP_EOL; // integer
echo gettype($b).PHP_EOL; // integer
echo gettype($c).PHP_EOL; // integer

// 10進数以外での表現も可能
$a2  = 0b111;   // 2進数
$a8  = 0125;    // 8進数 
$a16 = 0x3A;    // 16進数
var_dump($a2);  // int(7)
var_dump($a8);  // int(85)
var_dump($a16); // int(58)

// 整数がとりえる範囲(最大値と最小値)は、定数から取得できる
$max = PHP_INT_MAX;
$min = PHP_INT_MIN;
var_dump($max); // int(9223372036854775807)
var_dump($min); // int(-9223372036854775808)

