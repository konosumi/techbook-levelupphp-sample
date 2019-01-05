<?php
/**
 * 強い型付けでは厳格な判定が行われる
 */
// 強い型付けの使用を宣言する
// 利用したいファイルの先頭に毎回宣言します
declare(strict_types=1);

final class SampleStrong
{
    // 整数だけ受け付ける
    public static function echoUserIdStrong(int $userId)
    {
        echo "userId=".$userId.PHP_EOL;
    }
}

// userId=123
SampleStrong::echoUserIdStrong(123);

/**
 * 弱い型付けでは通っていたが、強い型付けでは弾かれる
 * Fatal error: Uncaught TypeError: Argument 1 passed to
 * SampleStrong::echoUserIdStrong() must be of the type integer,
 * string given, called in 
 */
SampleStrong::echoUserIdStrong('123abcde');
