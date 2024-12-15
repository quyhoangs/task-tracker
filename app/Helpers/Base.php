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


function createStatus($isActive, $order, $name, $color, $isCompleted)
{
    return [
        'is_active' => $isActive,
        'order' => $order,
        'name' => $name,
        'color' => $color,
        'is_completed' => $isCompleted
    ];
}
    /*
                $table->string('template_name');
            //1 field để chứa các status của template_status (json) nó bao gồm các trường sau: name, color, order , is_open, is_closed, is_done
            $table->json('statuses');
            */

function createDefaultStatuses($templateName, $statuses)
{
    $defaultStatuses = [
        'template_name' => $templateName,
        'statuses' => $statuses
    ];
    return $defaultStatuses;
}
