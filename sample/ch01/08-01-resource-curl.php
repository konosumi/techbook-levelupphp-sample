<?php
/**
 * cURL接続によるHTTPクライアント 
 */
 
// Curl success: <!DOCTYPE html PUBLIC "-//W3C/
curl_access("https://www.impressrd.jp/");
// Curl http error: 404
curl_access("https://www.impressrd.jp/abcde");
 
function curl_access($url) {
    // cURLセッションを初期化する
    $ch = curl_init();

    // リソースであるかどうか
    var_dump(is_resource($ch)); // bool(true)
    var_dump(get_resource_type($ch)); // string(4) "curl"
 
    // アクセス先の設定
    curl_setopt($ch, CURLOPT_URL, $url);
    // TRUEにすると、curl_exec()の返り値が文字列になる
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // 接続の試行を待ち続ける秒数。0は永遠に待ち続けるので避けたほうが良い
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);

    // アクセスの実行
    $res = curl_exec($ch);

    // cURLのエラーの有無
    if (CURLE_OK !== curl_errno($ch)) {
        // cURLが失敗した
        echo 'Curl error: '. curl_error($ch). PHP_EOL;
        curl_close($ch);
        return;
    }
    
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    // 200 OKかどうか
    if ($statusCode === 200) {
        // HTMLを全部出力すると多いので、動作確認用に先頭30文字だけ表示
        echo 'Curl success: '. mb_substr($res, 0, 30). PHP_EOL;
    } else {
        // 400 Bad Requestや404Not Foundなど
        echo 'Curl http error: '. $statusCode. PHP_EOL;
    }
 
    // cURLセッションを閉じる(終了する)
    curl_close($ch);
}
