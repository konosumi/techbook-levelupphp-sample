<?php
/**
 * 関数や定数の名前空間
 */
namespace sample\ch05;

// 名前空間の下で関数を定義する
function sampleFunction()
{
    echo 'Sample function!'.PHP_EOL;
}

// 名前空間の下で定数を定義する
// constはクラスの中で定義するのが普通なので、推奨する書き方ではありません
const SAMPLE_DEFINE = 'Sample function!'.PHP_EOL;

// 関数の名前空間経由での呼び出し
\sample\ch05\sampleFunction();

// 定数の名前空間経由での呼び出し
echo \sample\ch05\SAMPLE_DEFINE;
