<?php

namespace App\Filament\Pages;

use JibayMcs\FilamentTour\Tour\HasTour;
use JibayMcs\FilamentTour\Tour\Step;
use JibayMcs\FilamentTour\Tour\Tour;

class Dashboard extends \Filament\Pages\Dashboard
{
    use HasTour;

    /**
     * @throws \Exception
     */
    public function tours(): array
    {
        return [
            Tour::make(id: 'main')
                ->steps(
                    Step::make()
                        ->title('Welcome to the demo for translatable pro !')
                        ->description('here you will discover the features of the plugin!'),

                    Step::make('.zu-locale-switcher')
                        ->title('here is the simple locale switcher !')
                        ->description('it will render the page with the selected language !')
                ),
        ];
    }
}
