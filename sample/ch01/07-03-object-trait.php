<?php
/**
 * (PHP5.4)Traitによるクラスの拡張
 */

trait transport1 {
    // 静的関数
    static function test() {
        echo "test!".PHP_EOL;
    }
    // インスタンス関数
    function canRide() {
        echo "Can Ride!".PHP_EOL;
    }
}
trait transport2 {}

class Base {
    function ridePrice() {
        return 100;
    }
}

// TaxiクラスはBaseを継承している
class Taxi extends Base {
    // PHPではクラスの多重継承はできないが、traitを使ったクラスの拡張はできる
    use transport1, transport2;
}
class Train extends Base {
    // traitは他のクラスでも使い回すことができる
    use transport1, transport2;
}

// useで拡張したtraitのメソッド郡は、
// あたかもオブジェクト自身が持つ関数と同じように使用できる
Taxi::test(); // test!
$taxi = new Taxi();
$taxi->canRide();
