<?php
/**
 * コールバック(callable)
 */

/** is_callable()による、呼び出し可能な関数かどうかの調査 **/
// 調査のために適当な関数とクラスを定義しておく
function myfunc() {}
class MyTest {
    static function mystafunc() {}
    function myfunc() {}
}

// myfuncは定義されているので呼び出し可能な関数
var_dump(is_callable('myfunc')); // bool(true)
// myfunc2は定義されていないので呼び出しできない
var_dump(is_callable('myfunc2')); // bool(false)

// MyTestのmystafuncは呼び出し可能な静的(クラス)メソッド
var_dump(is_callable(['MyTest', 'mystafunc'])); // bool(true)
/**
 * is_callable()は、関数としてコール可能な構造
 * であるかどうかを調べるだけなので、クラスインスタンスが必要な
 * 通常のメソッドもtrueになる
 */
var_dump(is_callable(['MyTest', 'myfunc'])); // bool(true)
$obj = new MyTest();
var_dump(is_callable([$obj, 'myfunc'])); // bool(true)

// 無名関数は呼び出し可能な関数
$anonymous = function() { return true; };
var_dump(is_callable($anonymous));

/**
 * 無名関数の実行と型の実体調査
 */
$anonymous = function($test) { echo $test.PHP_EOL; };
var_dump(gettype($anonymous)); // string(6) "object"

// 無名関数の実行
$anonymous("abc"); //abc
call_user_func($anonymous, "abc"); //abc
