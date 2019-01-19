<?php
/**
 * Composerでインストールしたライブラリの利用
 * SEE: https://packagist.org/
 * require 'vendor/autoload.php';
 */

// オートロードによるインストールしたライブラリの自動読み込み
require 'vendor/autoload.php';

// 2 * 倍返しだ！ = 4 
echo "2 * 倍返しだ！ = ".NaokiHanzawa::baigaeshida(2).PHP_EOL;

// 倍返しだ！倍返しだ！
echo NaokiHanzawa::baigaeshida("倍返しだ！").PHP_EOL;
