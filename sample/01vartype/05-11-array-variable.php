<?php
/**
 * (PHP5.6)...による可変長の引数配列
 */

// $numbersは引数の数によって増減する配列となる
function sum(...$numbers) {
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

var_dump(sum(1, 2, 3, 4)); // int(10)
