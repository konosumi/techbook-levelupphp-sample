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
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Notice: Undefined variable: c 
var_dump(is_null($c)); // bool(true)

/** NULLと未定義で差が発生するケース **/
$c = [];

/** NULLでは、isset()はfalseだが配列にキーはある **/
$c['null'] = null;
var_dump(isset($c['null'])); // bool(false)
var_dump(array_key_exists('null', $c)); // bool(true)

/** 未定義では、isset()はfalseで配列にキーもない **/
unset($c['null']);
var_dump(isset($c['null'])); // bool(false)
var_dump(array_key_exists('null', $c)); // bool(false)

/** 未定義変数かどうかを検査する **/
error_reporting(E_ALL);

if (is_null($z)) {
    // Notice: Undefined variable: z
    echo '変数はNULLです'. PHP_EOL;
}
if (!isset($z)) {
    echo '変数は未定義であるか、NULLです'. PHP_EOL;
}
if (empty($z)) {
    echo '変数は未定義であるか、NULLであるか...'. PHP_EOL;
}

/**
 * (PHP7.0)NULL合体演算子(??)
 */
// 普通に書くと
if (isset($_GET['user'])) {
    $username = $_GET['user'];
} else {
    $username = 'nobody';
}
// またはこうなる
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

// Null合体演算子(??)は、isset()相当の判定を行ないます
$username = $_GET['user'] ?? 'nobody';
echo $username.PHP_EOL; // nobody

/**
 * (PHP5.3)エルビス演算子(?:)
 */
$name = "";

// 普通に書くと
if ($name) {
    $username = $name;
} else {
    $username = '名前が空です';
}
// またはこうなる
$username = $name ? $name : '名前が空です';

// if ($name)と同様の判定を行ない、$name、またはデフォルト値を返却します
$username = $name ?: '名前が空です';
echo $username.PHP_EOL; // 名前が空です

/** エルビス演算子は、未定義の変数を参照すると警告が発生する **/
error_reporting(E_ALL);
// Notice: Undefined variable: undefname 
echo ($undefname ?: '名前が空です').PHP_EOL; // 名前が空です
