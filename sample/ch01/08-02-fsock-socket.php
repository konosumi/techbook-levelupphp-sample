<?php
/**
 * fsockopen()によるソケット接続
 */

// ソケット接続を開始
$fp = fsockopen("www.example.com", 80, $errno, $errstr, 30);
if (!$fp) {
    echo "$errstr ($errno)<br />\n";
    exit;
}

// HTTPの要求を書き込む
$out = "GET / HTTP/1.1\r\n";
$out .= "Host: www.example.com\r\n";
$out .= "Connection: Close\r\n\r\n";
fwrite($fp, $out);

// 返却された内容(HTML)を終端に到達するまで読み込む
while (!feof($fp)) {
    // まずはレスポンスヘッダーが返ってきます
    //   HTTP/1.1 200 OK
    //   Cache-Control: max-age=604800 ...
    // その後にHTMLの本文が続きます
    //   <!doctype html>
    //   <html> ...
    echo fgets($fp, 128);
}

// ソケット接続を終える
fclose($fp);
