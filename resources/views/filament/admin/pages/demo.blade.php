<x-filament-panels::page>
    <form wire:submit="create">
        {{ $this->form }}
        <x-filament::button class="my-10" type="submit">
            save
        </x-filament::button>
    </form>

    <x-filament-actions::modals />
</x-filament-panels::page>
