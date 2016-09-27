> 给你的 Cookie 加上部署时间和前缀

# Install

composer require lingxi/new-cookie

[![Build Status](https://travis-ci.org/LingxiTeam/new-cookie.svg?branch=master)](https://travis-ci.org/LingxiTeam/new-cookie.svg?branch=master)
[![StyleCI](https://styleci.io/repos/67868479/shield)](https://styleci.io/repos/67868479)
[![Latest Stable Version](https://poser.pugx.org/lingxi/new-cookie/v/stable)](https://packagist.org/packages/lingxi/new-cookie)
[![Total Downloads](https://poser.pugx.org/lingxi/new-cookie/downloads)](https://packagist.org/packages/lingxi/new-cookie)
[![License](https://poser.pugx.org/lingxi/new-cookie/license)](https://packagist.org/packages/lingxi/new-cookie)

# Config

In app.php config file.

    comment
    // Illuminate\Cookie\CookieServiceProvider::class,
    // 'Cookie' => 'Illuminate\Support\Facades\Cookie',

    add
    Lingxi\Cookie\CookieServiceProvider::class,
    'Cookie' => Lingxi\Cookie\CookieFacade::class,

In session.php

    add
    'key_prefix' => 'lingxi',
