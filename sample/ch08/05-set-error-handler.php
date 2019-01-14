<?php
/**
 * エラーハンドラ
 */
ini_set('display_errors', 1);
// 全てのエラーが欲しい
error_reporting(E_ALL);

// 未定義の定数を使用すると、NOTICEレベルの例外が発生する
// Notice: Use of undefined constant ABCDE - assumed 'ABCDE'
ABCDE;

// エラーハンドラの登録(NOTICEレベルの例外も受信します)
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    echo 'errhandler: ', $errno, ' : ', $errstr, PHP_EOL;
});

// 再び、未定義の定数を使用してみる
// errhandler: 8 : Use of undefined constant ABCDE - assumed 'ABCDE'
ABCDE;
