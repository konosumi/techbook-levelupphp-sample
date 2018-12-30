<?php
/**
 * 文字列型
 */

// ASCII文字列と日本語のマルチバイト文字列は長さが異なる
$a = 'abc';   // ASCII文字列
$b = 'あいう'; // 日本語のマルチバイト文字列
echo 'strlen:'. strlen($a). PHP_EOL; // strlen:3
echo 'strlen:'. strlen($b). PHP_EOL; // strlen:9

// マルチバイトを加味した文字数の判定
echo 'mb_strlen:'. mb_strlen($b). PHP_EOL; // mb_strlen:3

// K「半角カタカナ」を「全角カタカナ」に変換します。 
// a「全角」英数字を「半角」に変換します。 
// s「全角」スペースを「半角」に変換します。 
$c = "１　あ　ｲ"; // 全角の1(全角スペース)あ(全角スペース)半角のイ
echo mb_convert_kana($c, 'Kas'). PHP_EOL; // 1 あ イ
