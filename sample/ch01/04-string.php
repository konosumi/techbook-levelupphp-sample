<?php
/**
 * 文字列型
 */

// 文字列型の基本形
$a = 'abc';
$b = 'あいうえお';
echo gettype($a).PHP_EOL; // string

// 長すぎる文字列ではメモリーが足りない
// Fatal error: Allowed memory size of 134217728 bytes
// exhausted (tried to allocate 2147483679 bytes)
$c = str_repeat('a', 2147483647);
