<?php
/**
 * 整数型(integer)
 */

// 整数型の基本形
$a = 3;   // 正の整数
$b = 0;   // ゼロ
$c = -10; // 負の整数
echo gettype($a).PHP_EOL; // integer

// 10進数以外の表現も可能
$a2 = 0b111;    // 2進数(先頭に0b)
var_dump($a2);  // int(7)
$a8 = 012;      // 8進数(先頭に0)
var_dump($a8);  // int(10)
$a16 = 0x1A;    // 16進数(先頭に0x)
var_dump($a16); // int(26)

// 整数の範囲(最大値と最小値)は、定数から取得できる
$max = PHP_INT_MAX;
var_dump($max); // int(9223372036854775807)
// (PHP7.0)PHP_INT_MIN
$min = PHP_INT_MIN;
var_dump($min); // int(-9223372036854775808)

// 整数の範囲を超えると桁あふれ(オーバーフロー)現象がおきる
$overMax = PHP_INT_MAX + 100;
var_dump($overMax); // float(9.2233720368548E+18)
$overMin = PHP_INT_MIN - 100;
var_dump($overMin); // float(-9.2233720368548E+18)

// 桁あふれの環境下では正確な判定ができない
$over100 = PHP_INT_MAX + 100;
$over101 = PHP_INT_MAX + 101;
var_dump($over100 == $over101); // bool(true)
