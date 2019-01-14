<?php
/**
 * (PHP5.6)...による配列の引数展開
 */

function fruits($a, $b, $c) {
    echo $a.PHP_EOL; // りんご
    echo $b.PHP_EOL; // みかん
    echo $c.PHP_EOL; // バナナ
}

// 配列を展開して引数に渡します
$array = ['りんご', 'みかん', 'バナナ'];
fruits(...$array);

/** 引数展開で過不足があるとどうなるのか */

// 配列が長ければ先頭の2つだけ使われる
function fruits2($a, $b) {
    echo $a.PHP_EOL; // りんご
    echo $b.PHP_EOL; // みかん
}
$array = ['りんご', 'みかん', 'バナナ'];
fruits2(...$array);

// 配列が短いと失敗する
function fruits3($a, $b, $c, $d) { }
$array = ['りんご', 'みかん', 'バナナ'];
fruits3(...$array);
// Fatal error: Uncaught ArgumentCountError:
// Too few arguments to function fruits3(),
