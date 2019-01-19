<?php
/**
 * オートロードの自動化
 */
spl_autoload_register(function ($classname) {
    $ds = DIRECTORY_SEPARATOR;
    // サンプルでは、2階層上がプロジェクト直下です
    $pjRootPath = realpath(__DIR__.$ds.'..'.$ds.'..');

    // sample\ch06\WelcomeAutoloadを分解してパスを組み立てます
    $loadClassFile = realpath($pjRootPath.$ds
        .implode($ds, explode('\\', $classname)).'.php');
    if (!$loadClassFile) {
        return;
    }

    // 新しく読み込みます: [省略]/sample/ch06/WelcomeAutoload.php
    echo '新しく読み込みます: '.$loadClassFile.PHP_EOL;

    // プロジェクト直下から辿ると、全てのPHPファイルが対象になってしまう
    // 今回の自動読み込みはサンプル下だけに限定しておきます
    $samplePath = $pjRootPath.$ds.'sample';
    // サンプル下にあるファイルを読み込もうとしていれば0になるはず
    if (strpos($loadClassFile, $samplePath) !== 0) {
        return;
    }

    include($loadClassFile);
});

// Welcome to autoload! 
$sample = new \sample\ch06\WelcomeAutoload();
$sample->welcome();
