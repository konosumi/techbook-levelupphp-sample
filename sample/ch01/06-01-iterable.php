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

// イテレータ
class MyIterator implements Iterator {
    private $position = 0;
    private $array = ["first", "second"];  

    public function __construct() {
        $this->position = 0;
    }

    // 位置を巻き戻す
    public function rewind() {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    // 現在の要素を取得する
    public function current() {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    // 現在のキーを取得する
    public function key() {
        var_dump(__METHOD__);
        return $this->position;
    }

    // 位置を次に進める
    public function next() {
        var_dump(__METHOD__);
        ++$this->position;
    }

    // 値を取得できる位置にいるかどうか
    public function valid() {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }
}

$it = new MyIterator;
var_dump(is_iterable($it)); // bool(true)
foreach($it as $key => $value) {
    echo $key. ' => '. $value. PHP_EOL;
}

/**
 * 以下のように出力される
 * string(18) "MyIterator::rewind"
 * string(17) "MyIterator::valid"
 * string(19) "MyIterator::current"
 * string(15) "MyIterator::key"
 * 0 => first
 * string(16) "MyIterator::next"
 * string(17) "MyIterator::valid"
 * string(19) "MyIterator::current"
 * string(15) "MyIterator::key"
 * 1 => second
 * string(16) "MyIterator::next"
 * string(17) "MyIterator::valid"
 */

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
