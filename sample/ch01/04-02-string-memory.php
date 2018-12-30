<?php
/**
 * メモリーのオーバーフロー
 */

// 長すぎる文字列ではメモリーが不足する
// Fatal error: Allowed memory size of 134217728 bytes
// exhausted (tried to allocate 2147483679 bytes)
//$c = str_repeat('a', 2147483647);

// 文字列が長くなるごとにメモリー使用量が増えていく
$d = '';
for ($i = 1; $i < 2147483647; $i++) {
    $d .= 'a';

    // 100文字ごとに出力する
    if (strlen($d) % 100 !== 0) {
        continue;
    }

    // len:130023300 memory:130376552
    echo 'len:'. strlen($d). ' memory:'. memory_get_usage(). PHP_EOL;
}
