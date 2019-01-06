<?php
/**
 * お手軽なルーティングエンジン
 */
// ルーティング設定
$routerConfig = [
    '/phpinfo' => '/phpinfo'
];

// ルーティングはURIのパスを基に判定します
// 単純に使うと?クエリで誤判定するので、パスだけ抜き出します
$uriPath = parse_url($_SERVER['REQUEST_URI'])['path'];

// ルーティング設定に存在しない不正なURIを弾きます。
if (!isset($routerConfig[$uriPath])) {
    header("HTTP/1.0 404 Not Found");
    return;
}

// controllerの下にある、パスに対応したPHPファイルを呼び出します。
$basePath = __DIR__.'/../controller';
$ctrlPath = realpath($basePath.$routerConfig[$uriPath].'.php');
if ($ctrlPath) {
    require($ctrlPath);
} else {
    // ルーティング設定をメンテナンスしていれば、来ることはない
    header("HTTP/1.0 500 Internal Server Error");
    return;
}
