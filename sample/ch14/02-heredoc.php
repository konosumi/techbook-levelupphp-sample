<?php
/**
 * (PHP7.3)ヒアドキュメントのインテント
 */

// 今まではヒアドキュメントの終端を行の先頭に置く必要がありました
echo <<<END
あ
い
う
END;
echo "\n-----\n";

// PHP7.3ではヒアドキュメントをインデントすることができます
echo <<<END
    あ
    い
    う
    END;