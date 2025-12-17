<?php

namespace App\Providers;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        TranslatableTabs::configureUsing(function (TranslatableTabs $component) {
            $languages = (new Collection(config('zeus-translatable-pro.languages')));
            $localesLabels = $languages
                ->mapWithKeys(function ($item) {
                    return [$item['code'] => $item['name']];
                })
                ->toArray();
            $locales = $languages->pluck('code')->toArray();
            $activeTab = $languages->search(fn ($lang) => $lang['code'] === app()->getLocale()) + 1;

            $component
                ->activeTab($activeTab)
                ->localesLabels($localesLabels)
                ->locales($locales);
        });

        Model::unguard();

        Blade::directive('zeus', function () {
            return 'zeus';
        });

        Blade::directive('stillStats', function ($code) {
            if (! app()->isLocal()) {
                return '<!-- stats --><script async defer data-website-id="'.$code.'" src="https://stats.larazeus.com/script.js"></script>';
            }

            return '<!-- no tags for you -->';
        });
    }
}
