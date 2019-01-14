<?php
/**
 * (PHP5.6)...による引数展開
 */

function fruits($a, $b, $c) {
    echo $a.PHP_EOL; // りんご
    echo $b.PHP_EOL; // みかん
    echo $c.PHP_EOL; // バナナ
}

// 配列を展開して引数に渡します
$array = ['りんご', 'みかん', 'バナナ'];
fruits(...$array);
