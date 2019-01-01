<?php
/**
 * (PHP7.0)無名クラス
 */
class BaseController
{
    public function __construct()
    {
        echo 'BaseController __construct()'.PHP_EOL;
    }

    public function run()
    {
        echo 'BaseController run()'.PHP_EOL;
    }
}

/**
 * 無名クラスによる即席コントローラー(基盤クラスを継承しています)
 * BaseController __construct()
 * AnonymousController __construct()
 */
$controller = new class extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        echo 'AnonymousController __construct()'.PHP_EOL;
    }

    public function run()
    {
        parent::run();
        echo 'AnonymousController run()'.PHP_EOL;
    }
};

// BaseController run()
// AnonymousController run()
$controller->run();

// オブジェクトのクラス名を取得すると、とても長い名前が返却されます
// class@anonymous/[省略]anonymous-class.php0x103fe72e9
echo get_class($controller).PHP_EOL;
