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
// (未定義変数を参照しているため、環境によっては警告が発生します)
error_reporting(E_ALL);
// Notice: Undefined variable: c 
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

// 未定義変数かどうかを検査する
error_reporting(E_ALL);

// (is_null) Notice: Undefined variable: z
if (is_null($z)) {
    echo ' 変数は値を持ちません'. PHP_EOL;
}

// (isset) 警告は発生しない
if (!isset($z)) {
    echo '変数は未定義であるか、値を持ちません'. PHP_EOL;
}

// (empty) 警告は発生しない
if (empty($z)) {
    echo '変数は未定義であるか、値を持たないか...'. PHP_EOL;
};
