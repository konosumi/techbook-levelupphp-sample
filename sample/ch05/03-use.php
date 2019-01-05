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

// おまけ：(PHP7)複数use
// SEE: https://qiita.com/hnw/items/35dc3f54ec3358831cad
/**
 * use Symfony\Component\Console\{
 *   Input\InputInterface,
 *   Input\InputArgument,
 *   Input\InputOption,
 *   Output\OutputInterface,
 *   Output\ConsoleOutputInterface
 *};
 */
