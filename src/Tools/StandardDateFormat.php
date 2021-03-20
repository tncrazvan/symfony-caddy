<?php


namespace App\Tools;

use DateTime;

class StandardDateFormat
{
    public static function YYMMDD(?Datetime $datetime):string{
        return !$datetime?'YYMMDD':$datetime->format('ymd');
    }

    public static function DDMMYY(?Datetime $datetime):string{
        return !$datetime?'DDMMYY':$datetime->format('dmy');
    }

    public static function HHMM(?Datetime $datetime):string{
        return $datetime?$datetime->format('Hs'):'HHMM';
    }

    public static function MMYY(?DateTime $datetime):string{
        return !$datetime?'MMYY':$datetime->format('my');
    }

    public static function YYDD(?DateTime $datetime):string{
        return Filler::fill(5,$datetime?(
            $datetime->format('y')
            .Filler::fill(3,((int)$datetime->format('z'))+1,Filler::FILL_LEFT,'0')
        ):'YYDDD');
    }
    public static function CCYYMMDD(?DateTime $datetime):string{
        if(!$datetime) return 'CCYYMMDD';
        $century = substr($datetime->format('Y'),0,2);
        return $century.$datetime->format('ymd');
    }
}
