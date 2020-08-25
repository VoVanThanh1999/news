<?php


class Abtract
{
    public static function to_slug($str)
    {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(Ã |Ã¡|áº¡|áº£|Ã£|Ã¢|áº§|áº¥|áº­|áº©|áº«|Äƒ|áº±|áº¯|áº·|áº³|áºµ)/', 'a', $str);
        $str = preg_replace('/(Ã¨|Ã©|áº¹|áº»|áº½|Ãª|á»�|áº¿|á»‡|á»ƒ|á»…)/', 'e', $str);
        $str = preg_replace('/(Ã¬|Ã­|á»‹|á»‰|Ä©)/', 'i', $str);
        $str = preg_replace('/(Ã²|Ã³|á»�|á»�|Ãµ|Ã´|á»“|á»‘|á»™|á»•|á»—|Æ¡|á»�|á»›|á»£|á»Ÿ|á»¡)/', 'o', $str);
        $str = preg_replace('/(Ã¹|Ãº|á»¥|á»§|Å©|Æ°|á»«|á»©|á»±|á»­|á»¯)/', 'u', $str);
        $str = preg_replace('/(á»³|Ã½|á»µ|á»·|á»¹)/', 'y', $str);
        $str = preg_replace('/(Ä‘)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }
}