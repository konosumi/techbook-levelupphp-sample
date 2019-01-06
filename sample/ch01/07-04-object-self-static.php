<?php
/**
 * (PHP5.3)selfとstaticの違い(遅延的束縛)
 */
class A {
    public static function who() {
        // 定義した時点で、__CLASS__=自分自身(Aクラス)となる
        echo __CLASS__.PHP_EOL;
    }
    public static function testSelf() {
        // 定義した時点で、self=自分自身(Aクラス)となる
        self::who();
    }
    public static function testStatic() {
        // staticが誰を指し示すのかは、実行時の段階で決定される
        // Aを継承した他のクラスから呼び出された場合、static=継承先のクラスとなる
        static::who();
    }
}
class B extends A {
    public static function who() {
        // 定義した時点で、__CLASS__=自分自身(Bクラス)となる
        echo __CLASS__.PHP_EOL;
    }
}

B::testSelf(); // Aクラスのwho()が呼び出される(self)
B::testStatic(); // Bクラスのwho()が呼び出される(static)
