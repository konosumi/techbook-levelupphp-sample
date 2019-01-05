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

/** in_array()における緩やかな比較と厳密な比較 **/
$c = 0;

// 緩やかな比較
// bool(true)
var_dump(in_array($c, ['0A', '1B', '2C']));

// 厳密な比較
// bool(false)
var_dump(in_array($c, ['0A', '1B', '2C'], true));
//}

/**
 * 論理型(bool)への変換が働くifの変数判定
 */
// 以下の例はすべてfalseに変換されるので、何も出力されません

// booleanのFALSE
if (false) { echo "TRUE!"; }
// intの0とfloatの0.0
if (0 || 0.0) { echo "TRUE!"; }
// 空の文字列と文字列の "0"
if ("" || "0") { echo "TRUE!"; }
// 要素数がゼロの配列
if ([]) { echo "TRUE!"; }
// 特別な値 NULL (値がセットされていない変数を含む)
if (NULL) { echo "TRUE!"; }

// 空のタグから作成された SimpleXML オブジェクト
$xml_string = <<<EOF
<?xml version="1.0" encoding="utf-8" ?>
<image />
EOF;
if (new SimpleXMLElement($xml_string)) { echo "TRUE!"; }
