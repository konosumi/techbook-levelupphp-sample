<?php
/**
 * 改行コード
 */

// 改行コードを<br>タグに変換する
// foo isn't <br />
// bar
echo nl2br("foo isn't \r\n bar").PHP_EOL;
echo "----------".PHP_EOL;
// foo isn't <br />
// bar
echo nl2br("foo isn't \n bar").PHP_EOL;
