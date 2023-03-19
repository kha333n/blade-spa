<?php

namespace Kha333n\BladeSpa;

use Illuminate\Support\ServiceProvider;

class BladeSpaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('container', function () {
            return '<div id="innerHtml"></div>';
        });

        Blade::directive('spaJs', function () {
            return '<script>
alert("works");
</script>';
        });
        // Register any package routes here
        // Register any package views here
    }

    public function register()
    {
        // Register any package services here
    }
}
