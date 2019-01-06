<?php
/**
 * Composerでインストールしたライブラリの利用
 * SEE: https://packagist.org/
 * require 'vendor/autoload.php';
 */

// 実用レベルでは、基盤・上流側の処理で予めrequireしておきます
// 今回はサンプルなので、暫定的にディレクトリを上がって読み込ます
require implode(DIRECTORY_SEPARATOR,
    [__DIR__, '..', '..', 'vendor', 'autoload.php']);

// 2 * 倍返しだ！ = 4 
echo "2 * 倍返しだ！ = ".NaokiHanzawa::baigaeshida(2).PHP_EOL;

// 倍返しだ！倍返しだ！
echo NaokiHanzawa::baigaeshida("倍返しだ！").PHP_EOL;
