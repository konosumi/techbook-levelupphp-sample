<?php
/**
 * 正規表現と速度
 */
$str = 'abcde';
$word = 'bcd';

$time = microtime(true);
for ($i = 0; $i < 1000000; $i++) {
    // $wordが含まれているかどうか
    if (preg_match('/'.$word.'/', $str)) {
        // echo 'Hit!';
    }
}
// preg_match:0.23271107673645 
echo 'preg_match:'.(microtime(true) - $time).PHP_EOL;

$time = microtime(true);
for ($i = 0; $i < 1000000; $i++) {
    // $wordが含まれているかどうか(文字の位置を調べている)
    if (strpos($str, $word) !== false) {
         // echo 'Hit!';
    }
}
// strpos:0.048377990722656
echo 'strpos:'.(microtime(true) - $time).PHP_EOL;
