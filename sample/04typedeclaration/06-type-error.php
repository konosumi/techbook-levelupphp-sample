<?php
/**
 * TypeErrorの例外を捕捉する
 */
declare(strict_types=1);

function sample(): int
{
    // Int制約なのに真偽値を返してみる
    return true;
}

try {
    sample();
} catch (Exception $e) {
    // TypeErrorは通常のExceptionではない
} catch (TypeError $e) {
    // TypeErrorもしくはErrorのキャッチで捕捉できる

    // Class: TypeError
    echo 'Class: '.get_class($e).PHP_EOL;

    // Return value of sample()
    // must be of the type integer, boolean returned
    echo $e->getMessage().PHP_EOL;
}
