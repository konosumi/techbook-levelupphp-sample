<?php
/**
 * 変数のスコープ
 */

/** ローカルスコープ **/
function localscope()
{
    // 関数内で宣言された変数は、関数内でしか生存しません。
    $str = 'abcde';
    return $str;
}
    
// 関数を呼び出してみる
localscope();

// str is not alive
echo isset($str) ? 'str is alive.' : 'str is not alive.';
echo PHP_EOL;

/** グローバルスコープ **/
// クラスや関数の外で定義している普通の変数
$str = 'abcde';

/** 定義済みの円周率定数を再定義してみる */
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Notice: Constant M_PI already defined 
define('M_PI', 3.14);