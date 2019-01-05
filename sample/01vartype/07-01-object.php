<?php
/**
 * オブジェクト(object)
 */

/** is_object()を使った、オブジェクトかどうかの判定 **/
// 1. PHPが言語レベルで用意しているクラスのインスタンス
$instance1 = new Datetime();
var_dump(is_object($instance1)); // bool(true)
// 2. ユーザー自身が定義したクラスのインスタンス
class MyTest {}
$instance2 = new MyTest();
var_dump(is_object($instance2)); // bool(true)

// 3. 標準クラスのインスタンス
$instance3 = new stdClass();
var_dump(is_object($instance3)); // bool(true)
// 4. 無名クラスのインスタンス
$instance4 = new class {};
var_dump(is_object($instance4)); // bool(true)

/** JSONをパースすると標準クラスになる **/
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

/** オブジェクトの判別 **/
class MyDateTime extends DateTime {}
$a = new MyDateTime();
var_dump($a instanceof MyDateTime); // bool(true)
// 継承したサブクラスのインスタンスも有効
var_dump($a instanceof DateTime); // bool(true)
