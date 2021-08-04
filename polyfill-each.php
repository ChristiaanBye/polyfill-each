<?php

if (!function_exists('each')) {
    function each(array &$array)
    {
        $key   = key($array);
        $value = current($array);

        if ($key === null) {
            return false;
        }

        next($array);

        return array(
            1       => $value,
            'value' => $value,
            0       => $key,
            'key'   => $key
        );
    }
}
