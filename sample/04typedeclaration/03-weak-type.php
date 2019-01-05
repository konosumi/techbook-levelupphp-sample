<?php
/**
 * 弱い型付けでは暗黙的型変換が起きる
 */
final class SampleWeak
{
    // 整数に"変換できるモノ"だけ扱います。
    public static function echoUserIdWeak(int $userId)
    {
        echo "userId=".$userId.PHP_EOL;
    }
}

// 先頭が数値である文字列は、暗黙的型変換で数値に変換できる
// userId=123
SampleWeak::echoUserIdWeak('123abcde');
