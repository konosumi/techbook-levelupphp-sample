<?php
/**
 * (PHP7.1)配列の短縮構文を適用した代入
 */

// 従来のやり方
list($a, $b) = array(1, 2);
list($a, $b) = array($b, $a); // 変数の交換(スワップ)
echo 'a:', $a,' b:', $b, PHP_EOL; // a:2 b:1

// 変数代入の左辺にも、配列の短縮構文を使えるよになりました
[$a, $b] = [1, 2];
[$a, $b] = [$b, $a]; // 変数の交換(スワップ)
echo 'a:', $a,' b:', $b, PHP_EOL; // a:2 b:1