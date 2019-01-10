<?php
/**
 * メモリー使用量の計測
 */
function test($count) {
    $sum = '';
    for($i = 0; $i < $count; $i ++) {
        $sum .= 'a';
    }
}

$start = memory_get_usage();
$startActual = memory_get_usage(true);
test(10000000);
$end = memory_get_usage();
$endActual = memory_get_usage(true);

// PHPがスクリプトに割り当てているメモリー使用量は0バイト増えました
echo 'PHPがスクリプトに割り当てているメモリー使用量は'.($end - $start).'バイト増えました'.PHP_EOL;

// システムが実際に割当てたメモリーは2097152バイト増えました
echo 'システムが実際に割当てたメモリーは'.($endActual - $startActual).'バイト増えました'.PHP_EOL;

