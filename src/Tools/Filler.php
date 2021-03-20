<?php
namespace App\Tools;

class Filler{
    public const FILL_LEFT = 0;
    public const FILL_RIGHT = 1;
    public static function fill(int $length, string|int|float $contents, int $fill_direction = 1, string $filler = ' '):string{
        if($contents instanceof float)
            $contents = (int) $contents * 100;

        $contents = substr("$contents",0,$length);
        if($fill_direction === static::FILL_LEFT)
            return str_repeat($filler,$length-strlen($contents)).$contents;
        return $contents.str_repeat($filler,$length-strlen($contents));
    }
}
