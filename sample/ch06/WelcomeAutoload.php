<?php
/**
 * オートロードによって自動読み込みされるサンプルクラス
 */
namespace sample\ch06;

class WelcomeAutoload {
    function welcome() {
        echo 'Welcome to autoload!'.PHP_EOL;
    }
}