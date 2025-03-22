<?php

namespace App\Providers;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        TranslatableTabs::configureUsing(function (TranslatableTabs $component) {
            $component
                // locales labels
                ->localesLabels([
                    'en' => 'English',
                    'pt' => 'Portuguese',
                ])
                // default locales
                ->locales(['en', 'pt']);
        });

        Model::unguard();

        Blade::directive('zeus', function () {
            return '<link rel="stylesheet" href="https://still-code.com/css/still-sign.css"><span class="still-font-koho still-group"><span class="still-font-koho still-font-semibold still-text-zprimary-500 group-hover:still-text-zsecondary-500 still-transition still-ease-in-out still-duration-300">Lara&nbsp;<span class="still-font-koho still-line-through still-italic still-text-zsecondary-500 group-hover:still-text-zprimary-500 still-transition still-ease-in-out still-duration-300">Z</span>eus</span></span>';
        });

        Blade::directive('stillStats', function ($code) {
            if (! app()->isLocal()) {
                return '<!-- stats --><script async defer data-website-id="'.$code.'" src="https://stats.still-code.com/script.js"></script>';
            }

            return '<!-- no tags for you -->';
        });
    }
}
