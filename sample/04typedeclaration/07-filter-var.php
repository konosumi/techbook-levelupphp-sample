<?php
/**
 * filter_var()によるフィルタリングと型の変換
 */
$var = filter_var('123abc', FILTER_VALIDATE_INT);
// 数値と関係ない文字が混ざっているとfalseになる
var_dump($var); // bool(false)

// 文字列の'123'が数値の123になる
$var = filter_var('123', FILTER_VALIDATE_INT);
var_dump($var); // int(123)

// マイナスの数値にも対応している
$var = filter_var('-123', FILTER_VALIDATE_INT);
var_dump($var); // int(-123)
