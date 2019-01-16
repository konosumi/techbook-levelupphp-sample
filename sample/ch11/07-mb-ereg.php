<?php
/**
 * マルチバイト文字列の正規表現
 */

// 文字列の先頭からマッチさせて一致する文字があるか調べる
var_dump(mb_ereg_match('.*あい', '雛鶴あい')); // bool(true)
var_dump(mb_ereg('あい', '雛鶴あい')); // int(1)
var_dump(mb_ereg_replace('あい', 'aa', '雛鶴あい')); // string(8) "雛鶴aa"
