<?php
/**
 * (PHP7.1)左辺に配列構文を適用した短縮代入
 */

// list()を使った複数変数への代入
list($a, $b) = [1, 2];
list($a, $b) = [$b, $a]; // 値の交換(スワップ)
echo 'a:', $a,' b:', $b, PHP_EOL; // a:2 b:1

// (PHP7.1)左辺に配列構文を適用した短縮代入
[$a, $b] = [1, 2];
[$a, $b] = [$b, $a]; // 値の交換(スワップ)
echo 'a:', $a,' b:', $b, PHP_EOL; // a:2 b:1
