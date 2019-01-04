<?php                                                                       
/**
 * ブラウザと改行コード
 * (筆者は、PHPのビルトインウェブサーバーで実験しました)
 * 
 * cd sample/ch01/
 * php -S localhost:8000
 * http://localhost:8000/04-02-string-browser-enter.php
 */

// 送信されたテキストエリアにCR+LFがあるかどうか
echo strpos($_POST['test'],  "\r\n").'<br>'.PHP_EOL;
?>

<!-- 送信用フォーム -->
<form method="post">
  <textarea name="test">あいうえお
かきくけこ</textarea>
  <input type="submit" value="送信する">
</form>
