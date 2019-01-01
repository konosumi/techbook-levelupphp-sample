<?php
/**
 * オブジェクト(object)
 */

// 1. PHPが言語レベルで用意しているクラスのインスタンス
$instance1 = new Datetime();
// 2. ユーザー自身が定義したクラスのインスタンス
class MyTest {}
$instance2 = new MyTest();
// 3. 標準クラスのインスタンス
$instance3 = new stdClass();
// 4. 無名クラスのインスタンス
$instance4 = new class {};

// is_object()を使った、オブジェクトかどうかの判定
var_dump(is_object($instance1)); // bool(true)
var_dump(is_object($instance2)); // bool(true)
var_dump(is_object($instance3)); // bool(true)
var_dump(is_object($instance4)); // bool(true)

// JSONをパースすると標準クラスになる
$json = '{
    "title": "example",
    "price": 1000,
    "flags": { "onsale": true, "discount": false }
}';
$object = json_decode($json);

var_dump($object->title); // string(7) "example"
var_dump($object->flags->onsale); // bool(true)
// 中身は以下のような標準クラスのインスタンス(オブジェクト)です
var_dump($object);
/**
 * object(stdClass)#5 (3) {
 *   ["title"]=> string(7) "example"
 *   ["price"]=> int(1000)
 *   ["flags"]=> object(stdClass)#6 (2) {
 *     ["onsale"]=> bool(true)
 *     ["discount"]=> bool(false)
 *   }
 * }
 */