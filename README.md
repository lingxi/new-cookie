> 给你的 Cookie 加上部署时间和前缀

# Install

composer require lingxi/cookie

[![Build Status](https://travis-ci.org/LingxiTeam/cookie.svg?branch=master)](https://travis-ci.org/LingxiTeam/cookie.svg?branch=master)
[![Latest Stable Version](https://poser.pugx.org/lingxi/cookie/v/stable)](https://packagist.org/packages/lingxi/cookie)
[![Total Downloads](https://poser.pugx.org/lingxi/cookie/downloads)](https://packagist.org/packages/lingxi/cookie)
[![License](https://poser.pugx.org/lingxi/cookie/license)](https://packagist.org/packages/lingxi/cookie)

# Config

In app.php config file.

    comment
    // Illuminate\Cookie\CookieServiceProvider::class,
    // 'Cookie' => 'Illuminate\Support\Facades\Cookie',

    add
    Lingxi\Cookie\CookieServiceProvider::class,
    'Cookie' => App\Services\Cookie\CookieFacade::class,

In session.php

    add
    'key_prefix' => 'foo',
