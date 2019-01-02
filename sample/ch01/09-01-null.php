<?php
/**
 * NULL(何も値を持たない)
 */

// 何も代入していない変数
$a;
var_dump(is_null($a)); // bool(true)

// NULLを代入した変数
$b = NULL;
var_dump(is_null($b)); // bool(true)

// まだ定義されていない変数
var_dump(is_null($c)); // bool(true)

// NULLと未定義で差が発生するケース
$c = [];

// (NULL) isset()はfalseだが配列にキーはある
$c['null'] = null;
var_dump(isset($c['null'])); // bool(false)
var_dump(array_key_exists('null', $c)); // bool(true)

// (未定義) isset()はfalseで配列にキーもない
unset($c['null']);
var_dump(isset($c['null'])); // bool(false)
var_dump(array_key_exists('null', $c)); // bool(false)