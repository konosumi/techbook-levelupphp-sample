<?php
/**
 * テンプレートエンジンの活用
 */

// 実用レベルでは、基盤・上流側の処理で予めrequireしておきます
// 今回はサンプルなので、暫定的にディレクトリを上がって読み込ます
require implode(DIRECTORY_SEPARATOR,
    [__DIR__, '..', '..', 'vendor', 'autoload.php']);

// Smaryクラスを使います
$smarty = new Smarty();

// インジェクション対策
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

// テンプレートを表示します(ブラウザに表示するHTMLに相当します)
$smarty->display('index.tpl');
