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
