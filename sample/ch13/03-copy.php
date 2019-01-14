<?php
/**
 * コピーオンライト
 */

$a = str_repeat('a', 1000000);
echo 'メモリ割当量：'.memory_get_usage().PHP_EOL; // 1355808
$b = $a;
echo 'メモリ割当量：'.memory_get_usage().PHP_EOL; // 1355840

// $bが変更される瞬間に、変更前のコピーが作成される
// これをコピーオンライトと言う
$b .= 'b';
// コピーされたので、メモリの割当量が一気に増えた
echo 'メモリ割当量：'.memory_get_usage().PHP_EOL; // 2359360
