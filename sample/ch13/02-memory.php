<?php
/**
 * メモリ使用量の計測
 */
function test($count) {
    $str = '';
    for($i = 0; $i < $count; $i ++) {
        $str .= 'a';
    }
}

// memory_get_usage()：PHPがスクリプトに割り当てたメモリ量
// memory_get_usage(true)：システムが実際に割り当てたメモリ量
$start = memory_get_usage();
$startActual = memory_get_usage(true);
test(10000000);
$end = memory_get_usage();
$endActual = memory_get_usage(true);

// PHPがスクリプトに割り当てたメモリ量は0バイト増えました
echo 'PHPがスクリプトに割り当てたメモリ量は'.($end - $start).'バイト増えました'.PHP_EOL;
// システムが実際に割り当てたメモリ量は2097152バイト増えました
echo 'システムが実際に割り当てたメモリ量は'.($endActual - $startActual).'バイト増えました'.PHP_EOL;
