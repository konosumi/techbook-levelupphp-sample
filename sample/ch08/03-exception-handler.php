<?php
/**
 * 例外ハンドラ
 */
// 関数を定義した場合
function exception_handler($e) {
    echo 'Uncaught exception: ' , get_class($e),
        " : ", $e->getMessage(), PHP_EOL;
}
set_exception_handler('exception_handler');

// 無名関数を使った場合
set_exception_handler(function ($e) {
    echo 'Uncaught exception: ' , get_class($e),
        " : ", $e->getMessage(), PHP_EOL;
});

/**
 * シャットダウンハンドラ(プログラムが終了する前に呼ばれます)
 */
register_shutdown_function(function () {
    echo 'Program is shutting down.'.PHP_EOL;
});

// 例外を発生させてみる
// Uncaught exception: DivisionByZeroError : Modulo by zero
// Program is shutting down.
0 % 0;
