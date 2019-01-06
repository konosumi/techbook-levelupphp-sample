<?php
/**
 * エラー例外
 */
try {
    // 0での割り算でエラー例外が起きる例
    $result = 5 % 0;
} catch (\Error $e) {
    // DivisionByZeroError
    echo get_class($e).PHP_EOL;
    // Modulo by zero
    echo $e->getMessage().PHP_EOL;
}

try {
    // Warning: Division by zero 
    $result = 5 / 0;
    // Result is INF(無限を意味する定数です)
    echo 'Result is '.$result.PHP_EOL;
} catch (\Error $e) {
    // ここには来ない
    // DivisionByZeroErrorは、0で割れば必ず発生するわけではありません
    // 主に余りの計算(%)で発生します
}
