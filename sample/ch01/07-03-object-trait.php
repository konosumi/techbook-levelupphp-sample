<?php
/**
 * (PHP5.4)Traitによるクラスの拡張
 */
trait transport {
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
    // PHPは多重継承ができないが、traitを使って拡張はできる
    use transport;
}

class Train extends Base {
    // traitは他のクラスでも使い回すことができる
    use transport;
}

// useで実装したtraitの関数は、あたかもインスタンスが持つクラスと同じように使える
$taxi = new Taxi();
$taxi->canRide();
$train = new Train();
$train->canRide();
