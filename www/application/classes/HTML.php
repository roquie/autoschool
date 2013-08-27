<?php defined('SYSPATH') OR die('No direct script access.');

class HTML extends Kohana_HTML
{
    public static function script($file, array $attributes = NULL, $protocol = NULL, $index = FALSE)
    {
        if (strpos($file, '://') === FALSE)
        {
            $file = URL::site($file, $protocol, $index);
        }

        $attributes['src'] = $file;


        return '<script'.HTML::attributes($attributes).'></script>';
    }

    public static function style($file, array $attributes = NULL, $protocol = NULL, $index = FALSE)
    {
        if (strpos($file, '://') === FALSE)
        {
            $file = URL::site($file, $protocol, $index);
        }

        $attributes['href'] = $file;

        $attributes['rel'] = empty($attributes['rel']) ? 'stylesheet' : $attributes['rel'];


        return '<link'.HTML::attributes($attributes).' />';
    }

    public static function less($file, array $attributes = NULL, $protocol = NULL, $index = FALSE)
    {
        if (strpos($file, '://') === FALSE)
        {
            $file = URL::site($file, $protocol, $index);
        }

        $attributes['href'] = $file;

        $attributes['rel'] = empty($attributes['rel']) ? 'stylesheet/less' : $attributes['rel'];


        return '<link'.HTML::attributes($attributes).' />';
    }

}