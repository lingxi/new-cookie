<?php

namespace Lingxi\Cookie;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illuminate\Cookie\CookieJar
 */
class CookieFacade extends Facade
{
    /**
     * Determine if a cookie exists on the request.
     *
     * @param  string  $key
     * @return bool
     */
    public static function has($key)
    {
        return ! is_null(static::$app['request']->cookie(static::getName($key), null));
    }

    /**
     * Retrieve a cookie from the request.
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return string
     */
    public static function get($key = null, $default = null)
    {
        $result = static::$app['request']->cookie(static::getName($key));

        if ($result === null) {
            $result = static::$app['request']->cookie(static::getLastName($key));
        }

        if ($result === null) {
            $result = $default;
        }

        return $result;
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cookie';
    }
}
