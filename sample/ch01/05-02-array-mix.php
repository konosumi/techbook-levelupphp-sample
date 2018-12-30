<?php
/**
 * 配列の混在によるトラブル
 */

// 数値配列と連想配列の混在によるトラブル
$mixArray = [1, 2, 'fruits' => 'apple', 4];
// [0]=> 1 [1]=> 2 ["fruits"]=> "apple" [2]=> 4
var_dump($mixArray);

// 数値配列だと思っていると、思わぬ不具合に遭遇する
$count = count($mixArray);
for ($i = 0; $i < $count; $i++) {
    // 連想配列の部分だけ取得できない
    // int(1) int(2) int(4) NULL
    var_dump($mixArray[$i]);
}

// foreachを使えば、数値配列と連想配列を両方とも取得できる
foreach ($mixArray as $key => $val) {
    // 0 => 1, 1 => 2, fruits => apple, 2 => 4
    echo $key. ' => '. $val.PHP_EOL;
}
