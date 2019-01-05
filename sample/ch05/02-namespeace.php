<?php
 /**
  * 名前空間の宣言
  * => これから定義するクラス(や関数・定数)に、住所を付与します
  * 名前空間は階層化できます
  * => 住所で例えますと「sample県ch05市」のようなものです
  */
namespace sample\ch05;

// \sample\ch05\DateTimeというクラスパスになります
final class DateTime {
    public function example()
    {
        return "My DateTime Class";
    }
}

// どちらの書き方でも動きます
// 1. 現在自分がいる名前空間で定義されているクラスを使う(相対)
$datetime = new DateTime();
echo $datetime->example().PHP_EOL;

// 2. 名前空間をはじめから記述する(絶対)
$datetime = new \sample\ch05\DateTime();
echo $datetime->example().PHP_EOL;

// 本来のPHPのDateTimeを使う際は、先頭にバックスラッシュを付けます
$original = new \DateTime();
echo $original->format('Y-m-d H:i:s').PHP_EOL;
