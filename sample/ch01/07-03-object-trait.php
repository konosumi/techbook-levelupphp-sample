<?php
/**
 * (PHP5.4)Traitによるクラスの拡張
 */

// traitの定義
trait transport {
    // 静的関数
    static function test() {
        echo "test!".PHP_EOL;
    }
    // インスタンス関数
    function canRide() {
        echo "Can Ride!".PHP_EOL;
    }
}

class Base {
    function ridePrice() {
        return 100;
    }
}

// TaxiクラスはBaseを継承している
class Taxi extends Base {
    // PHPではクラスの多重継承はできないが、traitを使って拡張はできる
    use transport;
}
class Train extends Base {
    // traitは他のクラスでも使い回すことができる
    use transport;
}

// useで実装したtraitの関数は、
// あたかもオブジェクト自身が持つ関数と同じように使える
Taxi::test(); // test!
$taxi = new Taxi();
$taxi->canRide();
