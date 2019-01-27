<?php
/**
 * 連想配列の要素名を括るか括らないか
 */

/**
 * 連想配列の要素名をクオートで括らない
 * (PHP7.2〜)Warning: Use of undefined constant a - assumed 'a'
 * (this will throw an Error in a future version of PHP)
 */
$a = [ a => "b" ];
// array(1) { ["a"]=> string(1) "b" }
var_dump($a);

/** 定数が定義されていると、定数が優先されて要素名に展開される **/
// cという定数を定義する
define('c', '定数です');
// array(1) { ["定数です"]=> string(1) "d" }
$b = [ c => "d" ];
var_dump($b);