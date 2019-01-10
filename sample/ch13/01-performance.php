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

// 終了時間 - 開始時間 = かかった時間
$start = microtime(true);
test(10000000);
$end  = microtime(true);
$elapsed = $end -  $start;

// test()に0.18110203742981秒かかりました
echo 'test()に'.$elapsed.'秒かかりました'.PHP_EOL;
