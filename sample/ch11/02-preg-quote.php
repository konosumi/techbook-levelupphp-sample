<?php
/**
 * preg_quoteによるメタ文字の置き換え
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
$quoted = preg_quote($before, '/');
var_dump($quoted); // string(7) "a\*b\*c"となりエスケープされた

// 結果：d
$result = preg_replace('/'.$quoted.'/', $after, $str);
echo $result.PHP_EOL;
