<?php
/**
 * パフォーマンス計測のシンプルな基本形
 */
function test($count) {
    $sum = 0;
    for($i = 0; $i < $count; $i ++) {
        $sum++;
    }
}

$start = microtime(true);
test(10000000);
$end  = microtime(true);

// test()に0.18110203742981秒かかりました
echo 'test()に'.($end -  $start).'秒かかりました'.PHP_EOL;
