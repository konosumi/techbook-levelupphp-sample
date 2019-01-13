<?php
/**
 * (PHP7.0)assertによる簡易テスト
 */

// assertに失敗したら例外をスローする
ini_set('assert.exception', 1);

// 配列内に前提とする要素名があることを表明する
// PHPの配列の型宣言が、あまり役に立たない弱点を補う
function assertArray(array $array) {
    assert(array_key_exists('c', $array));
    echo 'Assert pass!'.PHP_EOL;
}

// Assert pass!
assertArray([
    "c" => 3,
]);

// Fatal error: Uncaught AssertionError:
// assert(array_key_exists('c', $array)) 
assertArray([
    "a" => 1,
    "b" => 2,
]);
