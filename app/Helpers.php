<?php

/**
 * Flash Messages
 * Custom flash messages
 * flash()->success('title', 'Body');
 *
 * @param $message
 * @return \Illuminate\Foundation\Application|mixed
 */
function flash($title = null, $message = null)
{
    $flash = app('Infinety\Http\Flash');

    if (func_num_args() == 0) {
        return $flash;
    }

    return $flash->info($title, $message);
}