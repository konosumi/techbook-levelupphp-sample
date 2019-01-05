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