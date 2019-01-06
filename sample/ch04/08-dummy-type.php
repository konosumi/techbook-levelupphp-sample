<?php
/**
 * 疑似型の型宣言
 */

// 繰り返し可能(iterable)
function testIterable(iterable $ite) {
    foreach($ite as $val) {
        echo $val.PHP_EOL;
    }
}
// コールバック(関数呼び出し可能)型
function testCallable(callable $call) {
    $call();
}
// コールバック用のサンプル関数
function samplefunc() {
    echo 'samplefunc!'.PHP_EOL;
}

// foreachで繰り返し可能な値を渡す
testIterable(new ArrayIterator([1, 2]));

// コールバック可能な関数を渡す
testCallable(function () { echo 'callable!'.PHP_EOL; });
testCallable('samplefunc');

// abcという関数は定義してないのでエラーになる
// ...must be callable, string given...
testCallable('abc');
