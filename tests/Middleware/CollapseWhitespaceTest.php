<?php

namespace RenatoMarinho\LaravelPageSpeed\Test\Middleware;

use RenatoMarinho\LaravelPageSpeed\Middleware\CollapseWhitespace;
use RenatoMarinho\LaravelPageSpeed\Test\TestCase;

class CollapseWhitespaceTest extends TestCase
{
    public $middleware;

    public function getMiddleware()
    {
        $this->middleware = new CollapseWhitespace();
    }

    public function testApply()
    {
        $compress = '<!doctype html><html class="no-js" lang=""><head><meta charset="utf-8"><meta http-equiv="x-ua-compatible" content="ie=edge"><title></title><meta name="description" content=""><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="manifest" href="site.webmanifest"><link rel="apple-touch-icon" href="icon.png"><!-- Place favicon.ico in the root directory --><link rel="stylesheet" href="https://github.com/renatomarinho/laravel-page-speed/test/Boilerplate/css/normalize.css"><link rel="stylesheet" href="https://github.com/renatomarinho/laravel-page-speed/test/Boilerplate/css/main.css"></head><body><!--[if lte IE 9]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p><![endif]--><!-- Add your site or application content here --><p>Hello world! This is HTML5 Boilerplate.</p><img src="http://emblemsbf.com/img/18346.jpg" width="250" style="height:300px; padding:10px" /><script src="https://github.com/renatomarinho/laravel-page-speed/test/Boilerplate/js/vendor/modernizr-3.5.0.min.js"></script><script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script><script>window.jQuery || document.write(\'<script src="js/vendor/jquery-3.2.1.min.js"><\/script>\')</script><script src="https://github.com/renatomarinho/laravel-page-speed/test/Boilerplate/js/plugins.js"></script><script src="https://github.com/renatomarinho/laravel-page-speed/test/Boilerplate/js/main.js"></script><!-- Google Analytics: change UA-XXXXX-Y to be your site\'s ID. --><script> window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date; ga(\'create\',\'UA-XXXXX-Y\',\'auto\');ga(\'send\',\'pageview\') </script><script src="https://www.google-analytics.com/analytics.js" async defer></script></body></html>';
        $this->assertSame($compress, $this->middleware->apply( $this->html ));
    }
}