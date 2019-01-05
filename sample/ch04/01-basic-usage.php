<?php
/**
 * 型宣言の基本的な使い方
 */
final class SampleTypeDeclaration
{
    // 今までの書き方
    public static function echoUserId($userId)
    {
        echo "userId=".$userId.PHP_EOL;
    }

    // 型宣言によって、引数が整数である事を保証する
    public static function echoUserIdType(int $userId)
    {
        echo "userId=".$userId.PHP_EOL;
    }
}

// userId=abcde
SampleTypeDeclaration::echoUserId('abcde');

// userId=12345
SampleTypeDeclaration::echoUserIdType(12345);

/**
 * 整数を要求している関数に対して、文字列を与えてしまった。
 * Fatal error: Uncaught TypeError: Argument 1 passed to
 * SampleTypeDeclaration::echoUserIdType()
 * must be of the type integer, string given, called in 
 */
SampleTypeDeclaration::echoUserIdType('abcde');
