<?php
/**
 * (PHP7.0)定数配列 & (PHP7.1)クラス定数のアクセス権
 */
define('FOO', [
    'program' => 'php',
    'fruits' => 'apple'
]);

echo FOO['program'].PHP_EOL; // php

// 実際の現場では、クラス定数をよく使います
class SampleConst {
    const FOO = [
        'program' => 'php',
        'fruits' => 'apple'
    ];

    /**
     * PHP7.1以降では、クラス定数にアクセス権限を指定することができます
     */
    public const PROGRAM = 'php';
    private const FRUITS = 'apple';
}

echo SampleConst::FOO['fruits'].PHP_EOL; // apple

// public宣言されている定数なのでアクセスできる
echo SampleConst::PROGRAM.PHP_EOL; // php

// private宣言された定数はアクセスできない
// Fatal error: Uncaught Error:
// Cannot access private const SampleConst::FRUITS
echo SampleConst::FRUITS.PHP_EOL;
