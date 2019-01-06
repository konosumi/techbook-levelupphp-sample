<?php
/**
 * オートロードの基本形
 */

// まだ読み込まれていないクラスや関数を使おうとした時に、
// 実行される関数を登録する
spl_autoload_register(function ($classname) {
    echo '新しく読み込みます: '.$classname.PHP_EOL;
    $ds = DIRECTORY_SEPARATOR;

    // クラスの名前空間を含めた住所と、実際のファイルをマッピングします
    $autoloadConfig = [
        'sample\ch06\WelcomeAutoload' =>
            __DIR__.$ds.'WelcomeAutoload.php'
    ];

    // クラスが定義されているPHPファイルを読み込みます
    // これで使えるようにします
    if (isset($autoloadConfig[$classname])) {
        include($autoloadConfig[$classname]);
    }
});

/**
 * 初回の呼び出しだけ、クラスの読み込みが走っていることが分かります
 * 新しく読み込みます: sample\ch06\WelcomeAutoload
 * Welcome to autoload!
 * Welcome to autoload!
 */ 
$sample = new \sample\ch06\WelcomeAutoload();
$sample->welcome();
$sample2 = new \sample\ch06\WelcomeAutoload();
$sample2->welcome();
