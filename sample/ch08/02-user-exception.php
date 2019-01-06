<?php
/**
 * ユーザー例外(\Exception)
 */
final class SampleException extends \Exception {}

try {
    if (1 !== 0) {
        throw new SampleException('1 is not 0.');
    }
} catch (\SampleException $e) {
    // 1 is not 0.
    echo $e->getMessage().PHP_EOL;
}
