<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use LaraZeus\TranslatablePro\Facades\TranslatablePro;
use LaraZeus\TranslatablePro\Models\Phrase;

class TranslatableProSetupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zeus-translatable-pro:setup {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $model = '\\App\\Models\\'.$this->argument('model');
        $modelClass = new $model;

        foreach ($modelClass::get() as $item) {
            foreach (TranslatablePro::getTranslatableAttributes($modelClass) as $translatableAttribute) {
                $originalValue = $item->getRawOriginal($translatableAttribute);

                foreach (config('zeus-translatable-pro.languages') as $lang) {
                    $data = [
                        'model_type' => $item,
                        'model_id' => $item->id,
                        'lang_code' => $lang['code'],
                        'key' => $translatableAttribute,
                    ];

                    Phrase::updateOrCreate(
                        $data, [...$data, 'value' => $originalValue]
                    );
                }
            }
        }

    }
}
