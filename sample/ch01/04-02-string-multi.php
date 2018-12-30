<?php
/**
 * 文字列型
 */

// 半角のASCII文字列と、全角の日本語マルチバイト文字列は長さが異なる
$a = 'abc';   // 半角のASCII文字列
$b = 'あいう'; // 全角の日本語マルチバイト文字列
echo 'strlen:'. strlen($a). PHP_EOL; // strlen:3
echo 'strlen:'. strlen($b). PHP_EOL; // strlen:9

// マルチバイトを加味した文字数の判定
echo 'mb_strlen:'. mb_strlen($b). PHP_EOL; // mb_strlen:3

/**
 * mb_convert_kanaによる日本語文字列の変換
 * K「半角カタカナ」を「全角カタカナ」に変換します。 
 * a「全角」英数字を「半角」に変換します。 
 * s「全角」スペースを「半角」に変換します。 
 */
// (変換前)全角の1(全角スペース)あ(全角スペース)半角のイ
$c = "１　あ　ｲ";
// (変換後)半角の1(半角スペース)あ(半角スペース)全角のイ
$d = mb_convert_kana($c, 'Kas');
echo $c. PHP_EOL; // １　あ　ｲ
echo $d. PHP_EOL; // 1 あ イ

// mb_detect_encodingによる文字コードの検出
$e = 'あいう';
echo mb_detect_encoding($e, 'auto'). PHP_EOL; // UTF-8

// 想定される文字コードを優先度順に列挙することで、検出精度を高める
$detectOrder = "ASCII,JIS,UTF-8,EUC-JP,SJIS";
echo mb_detect_encoding($e, $detectOrder). PHP_EOL; // UTF-8

// UTF-8からSJISへの文字コード変換
$f = mb_convert_encoding('あいう', 'SJIS', 'UTF-8');
echo $f. PHP_EOL; // ??????(SJISになったので文字化けしてしまった)
$detectOrder = "ASCII,JIS,UTF-8,EUC-JP,SJIS";
echo mb_detect_encoding($f, $detectOrder). PHP_EOL; // SJIS
