<?php
/**
 * selfとstaticの違い(遅延的束縛)
 */
class A {
    public static function who() {
        echo __CLASS__.PHP_EOL;
    }
    public static function test1() {
        // 定義した時点で、self=自分自身(Aクラス)となる
        self::who();
    }
    public static function test2() {
        // staticが誰を指すのかは、実行時の段階で決定される
        // 他のクラスがAを継承した場合、static=継承先のクラスとなる
        static::who();
    }
}
class B extends A {
    public static function who() {
        echo __CLASS__.PHP_EOL;
    }
}

B::test1(); // Aクラスのwho()が呼び出される
B::test2(); // Bクラスのwho()が呼び出される
