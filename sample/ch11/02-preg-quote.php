<?php
/**
 * preg_quoteによるメタ文字の置換
 */

// 置換対象の文字列
$str = 'a*b*c';
// "a*b*c"という文字列を"d"にする構想です
[$before, $after] = ["a*b*c","d"];

// 結果がa*b*dになってしまう例
// 理由は、アスタリスク(*)が正規表現におけるメタ文字だからです
$result = preg_replace('/'.$before.'/', $after, $str);
echo $result.PHP_EOL;

// メタ文字のアスタリスク(*)ではなく、単純な文字として判定させます
// 結果：d
$quoted = preg_quote($before, '/');
$result = preg_replace('/'.$quoted.'/', $after, $str);
echo $result.PHP_EOL;
