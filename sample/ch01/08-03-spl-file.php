<?php
/**
 * SplFileObjectによるファイルの読み書き
 */

$file = 'test.txt';

// 書き込み
$spl = new SplFileObject($file, 'w');
$spl->fwrite("a\nb\nc\n");
unset($spl); // 変数が消えると自動的にcloseされる

// 読み込み
$spl = new SplFileObject($file, 'r');
foreach ($spl as $line) {
    echo $line; // a(改行)b(改行)c(改行)と出力される
}
unset($spl); // 変数が消えると自動的にcloseされる

unlink($file);
