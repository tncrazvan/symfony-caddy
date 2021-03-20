<?php

namespace App\Tools;

use DateTime;

class JulianDateFormat
{
    /**
     * Alias di StandardDateFormat::YYDD
     * @param DateTime|null $datetime
     * @return string
     */
    public static function parse(?DateTime $datetime):string{
        return StandardDateFormat::YYDD($datetime);
    }
}
