<?php defined('SYSPATH') OR die('No direct script access.');

class Valid extends Kohana_Valid
{
    /**
     * Checks if a field is not empty.
     *
     * @param $value
     * @return  boolean
     */
    public static function not_empty($value)
    {
        $value = Security::xss_clean($value);

        if (is_object($value) AND $value instanceof ArrayObject)
        {
            // Get the array from the ArrayObject
            $value = $value->getArrayCopy();
        }

        // Value cannot be NULL, FALSE, '', or an empty array
        return ! in_array($value, array(NULL, FALSE, '', array()), TRUE);
    }

    /*public static function alpha_space($value)
    {
       return Valid::regex($value, '/^[a-zA-Zа-яА-ЯёЁ ]+/i');
    }*/
}
