<?php
/**
 * PHPの型変換
 */

 /** 1と1abcが同じであると判定される **/
if (1 == '1abc') {
    echo '一致しました！'.PHP_EOL; // 一致しました！
}

/**
 * 暗黙的型変換
 * 変数のif判定でも型の変換は発生する
 */
$a = 1;
// 変数をifで判定すると、$aが真偽値に自動変換された上で判定される
if ($a) {
    echo '真です！'.PHP_EOL; // 一致しました！
}

/**
 * 明示的型変換
 * プログラマが明示的に型の変換を指示している
 */
$a = 1;
var_dump((bool) $a);   // bool(true)
var_dump(boolval($a)); // bool(true)

/** swtichで考える緩やかな比較問題 **/
// 結果： 0 is A
$b = 0;
switch ($b) {
    case 'A': 
        // 「0 == A」なので、ここに来てしまう
        echo '0 is A'.PHP_EOL;
        break;
    case 0: 
        // 本来ならここに来て欲しい
        echo '0 is 0'.PHP_EOL;
        break;
}