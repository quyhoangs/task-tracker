<?php

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

/**
 * Translate the given message.
 *
 * @param  string|null  $key
 * @param  array  $replace
 * @param  string|null  $locale
 * @return string|array|null
 */
function _tr($key = null, $replace = [], $locale = null)
{
    if (is_null($key)) {
        return $key;
    }
    return ($key === ($translation = trans($key, $replace, $locale))) ? '' : $translation;
}

