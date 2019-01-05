<?php
/**
 * 名前空間のない世界線におけるクラス名の衝突
 */

// Fatal error: Cannot declare class DateTime,
// because the name is already in use in 
final class DateTime
{
    public function example()
    {
        return "My DateTime Class";
    }
}

$datetime = new DateTime();
echo $datetime->example();
