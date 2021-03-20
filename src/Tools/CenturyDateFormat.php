<?php


namespace App\Tools;

use DateTime;

class CenturyDateFormat
{
    public static function parse(?DateTime $datetime):string{
        return StandardDateFormat::CCYYMMDD($datetime);
    }
}
