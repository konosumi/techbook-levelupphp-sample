<?php
/**
 * 繰り返し可能(iterable)
 */

// is_iterable()を使った、繰り返し可能かどうかの判定
var_dump(is_iterable([1, 2, 3]));  // bool(true)
var_dump(is_iterable(new ArrayIterator([1, 2, 3])));  // bool(true)
var_dump(is_iterable((function () { yield 1; })()));  // bool(true)
var_dump(is_iterable(1));  // bool(false)
var_dump(is_iterable(new stdClass()));  // bool(false)

// ArrayIteratorを使ってみる
$a = new ArrayIterator([1, 2]);
foreach ($a as $val) {
    // ArrayIterator:1
    // ArrayIterator:2
    echo 'ArrayIterator:'.$val.PHP_EOL;
}

// ジェネレーターでyieldを使ってみる
function yieldtest() {
    for ($i = 1; $i < 3; $i++) {
        // yieldする毎に、関数呼び出し側のループが1つ進む
        yield $i;
        echo 'yield sareta!'.PHP_EOL;
    }
}

foreach (yieldtest() as $val) {
    // yield:1
    // yield sareta!
    // yield:2
    // yield sareta!
    echo 'yield:'.$val.PHP_EOL;
}
