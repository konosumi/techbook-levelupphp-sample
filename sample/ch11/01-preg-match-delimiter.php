<?php
/**
 * 正規表現のデリミタ
 */

// 正規表現のデリミタはスラッシュが多い
preg_match('/^123/', '12345'); // 先頭が123で始まる文字列かどうか

// デリミタは英数字、バックスラッシュ、空白文字以外の任意の文字が可能です
preg_match('@^123@', '12345');
preg_match('%^123%', '12345');

// よく使われるデリミタは、スラッシュ(/)、ハッシュ記号(#)、チルダ(~)です。
preg_match('#^/path#', '/path/to/test');
preg_match('~^/path~', '/path/to/test');
