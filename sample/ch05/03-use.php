<?php
/**
 * useによるショートカット
 */
namespace sample\ch05;

final class DateTime {
    public function example()
    {
        return "My DateTime Class";
    }
}
/**
 * エイリアスを定義することでショートカットできます
 * サンプルの都合上、変な位置でuseしてますが、
 * 実際はファイルの上で書くことが多いです
 */
use \sample\ch05\DateTime as Dtm;

$datetime = new Dtm();
echo $datetime->example().PHP_EOL;
