<?php
/**
 * SplTempFileObjectとCSVファイルの読み込み
 */

// 引数はメモリの最大量(バイト、デフォルトは2MB)
// 一時ファイルがこのサイズを越えると、
// ファイルはシステムの一時ディレクトリに移動します
$temp = new SplTempFileObject(2 * 1024 * 1024);

// 一時ファイルにCSVを書き込む
$temp->fwrite("a,b\nc,d\ne,f");

// これからCSVの読み込みで再利用するので、
// ファイル上の指し示す位置(ファイルポインタ)を先頭に戻す
$temp->rewind();

// CSVの読み込み
$temp->setFlags(SplFileObject::READ_CSV);
foreach ($temp as $line) {
    var_dump($line);
    // array(2) { [0]=> string(1) "a" [1]=> string(1) "b" }
    // array(2) { [0]=> string(1) "c" [1]=> string(1) "d" }
    // array(2) { [0]=> string(1) "e" [1]=> string(1) "f" }
}
