<?php
/**
 * (PHP5.5)try/catchのfinallyブロック
 */
class RandomException extends \Exception {}

function writeFile($file) {
    $fp = null;
    try {
        $fp = fopen($file, 'w');
        if (rand(0, 1) > 0.5) {
            throw new \RandomException('ランダムに失敗しました');
        } else {
            throw new \Exception('処理が失敗しました');
        }
    } catch (RandomException $e) {
        echo $e->getMessage().PHP_EOL; // ランダムに失敗しました
    } catch (Exception $e) {
        echo $e->getMessage().PHP_EOL; // 処理が失敗しました
    } finally {
        // どの経路を辿っても、必ず最後には実行したい処理を記述
        echo 'ファイルポインタは開かれていても必ず閉じます'.PHP_EOL;
        if (is_resource($fp)) {
            fclose($fp);
        }
    }
}

// ランダムに失敗しました
// ファイルポインタは開かれていても必ず閉じます
writeFile('test.txt');
