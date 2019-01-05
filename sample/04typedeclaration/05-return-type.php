<?php
/**
 * 関数の戻り値の型宣言
 */
declare(strict_types=1);

final class SampleReturnType
{
    // (PHP7.1)nullableはPHP7.1からです
    // 整数もしくはNULLを返す関数であることを宣言する
    public static function numberNullReturn(int $number): ?int
    {
        if ($number === 1) {
            return null;
        }
        if ($number === 2) {
            return $number + 1;
        }

        // 戻り値が数値ではないのでエラーになる
        return false;
    }

    // (PHP7.1)何も返らないことを保証する
    public static function voidReturn(int $number): void
    {
    }
}

// 何も表示されない(NULLが表示される)
echo SampleReturnType::numberNullReturn(1).PHP_EOL;
// 3が表示される
echo SampleReturnType::numberNullReturn(2).PHP_EOL;

/**
 * 想定外の型が返却されてしまった！
 * Fatal error: Uncaught TypeError: Return value of
 * SampleReturnType::numberNullReturn()
 * must be of the type integer or null, boolean returned in
 */
echo SampleReturnType::numberNullReturn(3).PHP_EOL;
