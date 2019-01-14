<?php
/**
 * (PHP5.4)short_open_tagの有効化
 */
$val = 'aiueo';
?>
<?= $val.PHP_EOL // aiueo ?>

<?php
/**
 * 以下のように、PHP起動時にphp.iniディレクティブを切り替えて動作確認ができます
 * php -d short_open_tag=false /path/to/sample.php
 * 
 * short_open_tagの設定によって、<?が動くかどうかが決まります
 * short_open_tag=false <? echo $val.PHP_EOL ?>
 * short_open_tag=true  aiueo
 */
?>
<? echo $val.PHP_EOL ?>
