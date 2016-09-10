<?php

namespace Lingxi\Cookie;

use Illuminate\Support\Arr;
use Lingxi\Deploy\Timestamp\TimestampKey;
use Symfony\Component\HttpFoundation\Cookie;
use Illuminate\Cookie\CookieJar as IlluminateCookieJar;

class CookieJar extends IlluminateCookieJar
{
    use TimestampKey;

    /**
     * Create a new cookie instance.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  int     $minutes
     * @param  string  $path
     * @param  string  $domain
     * @param  bool    $secure
     * @param  bool    $httpOnly
     * @return \Symfony\Component\HttpFoundation\Cookie
     */
    public function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true)
    {
        list($path, $domain, $secure) = $this->getPathAndDomain($path, $domain, $secure);

        $time = ($minutes == 0) ? 0 : time() + ($minutes * 60);

        return new Cookie($this->getName($name), $value, $time, $path, $domain, $secure, $httpOnly);
    }

    /**
     * Get a queued cookie instance.
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return \Symfony\Component\HttpFoundation\Cookie
     */
    public function queued($key, $default = null)
    {
        return Arr::get($this->queued, $this->getName($key), $default);
    }

    /**
     * Remove a cookie from the queue.
     *
     * @param  string  $name
     * @return void
     */
    public function unqueue($name)
    {
        unset($this->queued[$this->getName($name)]);
    }

    /**
     * Get the cookie real key.
     *
     * @param  string $key
     * @return string
     */
    public function getName($key)
    {
        return $this->addKeyPerfix(config('session.key_prefix') . '_' . $key, '_', true);
    }
}
