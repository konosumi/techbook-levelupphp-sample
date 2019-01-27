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
var_dump(in_array($c, ['0A', '1B', '2C'])); // bool(true)

// 厳密な比較
var_dump(in_array($c, ['0A', '1B', '2C'], true)); // bool(false)
//}

/** array_search()でも同じことが起こる **/
$as = 1;

// 緩やかな比較
var_dump(array_search($as, ['0A', '1B', '2C'])); // int(1)

// 厳密な比較
var_dump(array_search($as, ['0A', '1B', '2C'], true)); // bool(false)

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

/**  文字列のゼロ(0)の判定 **/
$d = "0";

// 普通に判定するとヒットしない
if ($d) {
    echo "ここには来ません".PHP_EOL;
}
// 文字列として考え、長さを判定すればヒットする
if (strlen($d) > 0) {
    echo "なんらかの文字が入力されています".PHP_EOL;
}

/** 論理型(boolean)から整数への変換 **/
var_dump((int) true);  // int(1)
var_dump((int) false); // int(0)

/** 浮動小数点数(float)から整数への変換 **/
var_dump((int) 1.1);     // 1
var_dump((int) 0.333e2); // 33

/** 文字列から数値への変換 **/
$foo = 1 + "10.5";              // $foo は float です (11.5)
$foo = 1 + "-1.3e3";            // $foo は float です (-1299)
// Warning: A non-numeric value encountered
$foo = 1 + "bob-1.3e3";         // $foo は integer です (1)
// Warning: A non-numeric value encountered
$foo = 1 + "bob3";              // $foo は integer です (1)
$foo = 1 + "10 Small Pigs";     // $foo は integer です (11)
$foo = 1 + "10 Little Piggies"; // $foo は integer です (11)
$foo = "10.0 pigs " + 1;        // $foo は integer です (11)
$foo = "10.0 pigs " + 1.0;      // $foo は float です (11)

/** 論理型から文字列への変換 **/
var_dump((string) true);  // string(1) "1"
var_dump((string) false); // string(0) ""

/** 配列やオブジェクトから文字列への変換 */
// 配列を文字列に変換するとstring(5) "Array"になる
var_dump((string) ["abc", "def"]);

// Recoverable fatal error: Object of class stdClass
// could not be converted to string 
//var_dump((string) new stdClass());

/** スカラー値の配列(array)への変換 **/
var_dump((array) true); // array(1) { [0]=> bool(true) }
var_dump((array) 1); // array(1) { [0]=> int(1) }
var_dump((array) 1.1); // array(1) { [0]=> float(1.1) }
var_dump((array) 'abcde'); // array(1) { [0]=> string(5) "abcde" }

/** 配列からオブジェクトへの変換 */
$obj = (object) ['bar' => 'foo'];
var_dump($obj->bar); // string(3) "foo"

/** 配列以外のオブジェクトへの変換 */
$obj = (object) 'ciao';
echo $obj->scalar.PHP_EOL; // 'ciao' を出力します

/** リソース型を変換してみる **/
$resource = fopen(__FILE__, 'r');

var_dump((bool) $resource); // bool(true)
var_dump((int) $resource); // int(5)
var_dump((string) $resource); // string(14) "Resource id #5"

// array(1) { [0]=> resource(5) of type (stream) }
var_dump((array) $resource);

// object(stdClass)#1 (1) { ["scalar"]=> resource(5) of type (stream) }
var_dump((object) $resource);
