<?php
/**
 * クラスインスタンスや、NULL値も型宣言が出来る
 */
final class SampleClassNullDeclaration
{
    // クラスインスタンス(オブジェクト)で型宣言する
    public static function echoDate(DateTime $datetime)
    {
        echo $datetime->format('Y-m-d').PHP_EOL;
    }

    // (PHP7.1)nullable 先頭にはてなマーク(?)があると、NULL値も許容します
    // NULLもしくはDateTimeという意味です
    public static function echoDateOrNull(?DateTime $datetime)
    {
        if ($datetime) {
            echo $datetime->format('Y-m-d');
        } else {
            echo 'datetime is null.';
        }
        echo PHP_EOL;
    }
}

// 2018-09-17
SampleClassNullDeclaration::echoDate(new DateTime());

// datetime is null.
SampleClassNullDeclaration::echoDateOrNull(null);

/**
 * 想定外の型を与えてしまった
 * Fatal error: Uncaught TypeError: Argument 1 passed to
 * SampleClassNullDeclaration::echoDate()
 * must be an instance of DateTime, string given, called in
 */
SampleClassNullDeclaration::echoDate('test');
