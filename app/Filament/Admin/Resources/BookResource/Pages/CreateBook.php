<?php

namespace App\Filament\Admin\Resources\BookResource\Pages;

use App\Filament\Admin\Resources\BookResource;
use Filament\Resources\Pages\CreateRecord;
use JibayMcs\FilamentTour\Tour\HasTour;
use JibayMcs\FilamentTour\Tour\Step;
use JibayMcs\FilamentTour\Tour\Tour;

class CreateBook extends CreateRecord
{
    use HasTour;

    protected static string $resource = BookResource::class;

    public function tours(): array
    {
        return [
            Tour::make(id: 'main')
                ->steps(
                    Step::make('.zu-langs-tabs')
                        ->title(title: 'Inline local switcher')
                        ->description('MultiLang component comes with inline locale switcher.'),

                    Step::make('.tiptap-editor')
                        ->title(title: 'Custom Inputs!')
                        ->description('you can add any filed component in the multiLang component'),

                    Step::make('.cat_form_input')
                        ->title(title: 'Select with relation!')
                        ->description('the values will render depend on the current active locale'),

                    Step::make('.meta_form_input')
                        ->title(title: 'support for relationship!')
                        ->description('Meta is a `hasOne` relationship, and effortless its supported with translatable'),

                    Step::make('.chapters_form_input')
                        ->title(title: 'support for repeater with relationship!')
                        ->description('Chapters is a `hasMany` relationship, and effortless its supported with translatable'),
                ),
        ];
    }
}
