<?php defined('SYSPATH') OR die('No direct script access.');

class UTF8 extends Kohana_UTF8
{
    /**
     * пример: strstr_after('lol@ex.ru', '@'); вернет ex.ru или null
     * @param      $haystack
     * @param      $needle
     * @param bool $case_insensitive
     *
     * @return string
     */
    public static function strstr_after($haystack, $needle, $case_insensitive = false)
    {
        $strpos = ($case_insensitive) ? 'stripos' : 'strpos';
        $pos = $strpos($haystack, $needle);

        if (is_int($pos))
            return substr($haystack, $pos + strlen($needle));

        return $pos;
    }
}
