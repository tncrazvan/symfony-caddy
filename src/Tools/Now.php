<?php


namespace App\Tools;

use DateTime;

class Now
{
    private static ?DateTime $datetime = null;
    public static function datetime():DateTime{
        if(static::$datetime === null)
            static::$datetime = new DateTime();

        return static::$datetime;
    }

}
