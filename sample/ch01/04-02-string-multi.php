<?php
/**
 * 文字列型
 */

// ASCII文字列と日本語のマルチバイト文字列は長さが異なる
$a = 'abc';   // ASCII文字列
$b = 'あいう'; // 日本語のマルチバイト文字列
echo 'strlen:'. strlen($a). PHP_EOL; // strlen:3
echo 'strlen:'. strlen($b). PHP_EOL; // strlen:9

// マルチバイト文字列を加味して文字数を判定する
echo 'mb_strlen:'. mb_strlen($b). PHP_EOL; // mb_strlen:3