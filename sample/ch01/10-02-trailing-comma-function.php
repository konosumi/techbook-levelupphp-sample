<?php
/**
 * (PHP7.3)関数の末尾カンマ
 */

// $numbersは引数の数によって増減する配列となる
function sum(...$numbers) {
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

// PHP7.3以降では、関数の末尾がカンマで終わっても許容される
$total = sum(1, 2, 3, 4,); // int(10)
echo $total."\n";
