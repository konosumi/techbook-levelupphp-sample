<?php
/**
 * テンプレートエンジンの実装サンプル
 */

// オートロードによるインストールしたライブラリの自動読み込み
require 'vendor/autoload.php';

// Smartyクラスを使います
$smarty = new Smarty();

// HTMLインジェクション対策
// テンプレートで出力する変数を自動でHTMLエスケープします
$smarty->escape_html = true;

// テンプレートファイルがあるディレクトリの指定
$smarty->setTemplateDir(__DIR__.DIRECTORY_SEPARATOR.'template');

// テンプレートに値を渡してみます
$smarty->assign('hello', 'Hello, World!!');
$smarty->assign('demos', [
    'This',
    'is',
    'Smarty.',
    '<script>alert(1);</script>'
]);

// テンプレートを表示します
$smarty->display('index.tpl');
