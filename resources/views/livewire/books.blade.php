@php
    $rtlLocales = ['ar', 'he', 'fa', 'ur', 'ps'];
    $isRtl = in_array(app()->getLocale(), $rtlLocales, true);
    $languages = collect(config('zeus-translatable-pro.languages'));
    $current = $languages->firstWhere('code', app()->getLocale());
    $currentName = $current['name'] ?? strtoupper(app()->getLocale());
@endphp

<div>
    <x-landing.hero :current-name="$currentName" :is-rtl="$isRtl" />

    <x-landing.features />

    <x-landing.library :books="$books" />

    <x-landing.queries-panel :queries="$queries" />
</div>
