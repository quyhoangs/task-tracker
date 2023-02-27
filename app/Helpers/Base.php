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


// Generates a gravatar URL for the given email address
// $email: the email address to generate a gravatar URL for
function gravatar_url($email)
{
    $email = md5($email);

    return "https://gravatar.com/avatar/{$email}?" . http_build_query([
        's' => 60,
        'd' => 'https://s3.amazonaws.com/laracasts/images/default-square-avatar.jpg'
    ]);
    // example: https://gravatar.com/avatar/quyhoang@gmail.com?s=60&d=https://s3.amazonaws.com/laracasts/images/default-square-avatar.jpg
}
