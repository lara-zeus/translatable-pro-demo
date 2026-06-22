<header class="sticky top-0 z-30 border-b border-zinc-200/70 bg-white/80 backdrop-blur-md">
    <nav class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-6 py-3 lg:px-8" aria-label="Main">
        {{-- Brand --}}
        <a href="{{ url('/') }}" class="group flex items-center gap-2.5">
            <span class="flex size-9 items-center justify-center rounded-xl bg-linear-to-br from-brand-500 to-brand-700 text-white shadow-sm shadow-brand-600/30">
                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <circle cx="12" cy="12" r="9" />
                    <path d="M3 12h18M12 3c2.5 2.6 2.5 15.4 0 18M12 3c-2.5 2.6-2.5 15.4 0 18" stroke-linecap="round" />
                </svg>
            </span>
            <span class="flex flex-col leading-tight">
                <span class="text-sm font-semibold tracking-tight text-zinc-900">Translatable&nbsp;Pro</span>
                <span class="text-xs font-medium text-brand-600">Live Demo</span>
            </span>
        </a>

        {{-- Mobile toggle (CSS only) --}}
        <input type="checkbox" id="nav-toggle" class="peer hidden" aria-hidden="true">

        {{-- Links --}}
        <div class="absolute inset-x-0 top-full hidden flex-col gap-1 border-b border-zinc-200/70 bg-white p-4 shadow-lg peer-checked:flex lg:static lg:flex lg:flex-row lg:items-center lg:gap-1 lg:border-0 lg:bg-transparent lg:p-0 lg:shadow-none">
            <a href="{{ url('/admin') }}" class="rounded-lg px-3 py-2 text-sm font-medium text-zinc-600 transition hover:bg-zinc-100 hover:text-zinc-900">
                Admin Panel
            </a>
            <a href="https://larazeus.com/translatable-pro" target="_blank" rel="noopener" class="rounded-lg px-3 py-2 text-sm font-medium text-zinc-600 transition hover:bg-zinc-100 hover:text-zinc-900">
                Documentation
            </a>
            <a href="https://github.com/lara-zeus/translatable-pro-demo" target="_blank" rel="noopener" class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-zinc-600 transition hover:bg-zinc-100 hover:text-zinc-900">
                <svg class="size-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M12 .5C5.7.5.5 5.7.5 12c0 5.1 3.3 9.4 7.9 10.9.6.1.8-.2.8-.5v-1.7c-3.2.7-3.9-1.5-3.9-1.5-.5-1.3-1.3-1.7-1.3-1.7-1.1-.7.1-.7.1-.7 1.2.1 1.8 1.2 1.8 1.2 1 1.8 2.7 1.3 3.4 1 .1-.8.4-1.3.7-1.6-2.6-.3-5.3-1.3-5.3-5.7 0-1.3.4-2.3 1.2-3.1-.1-.3-.5-1.5.1-3.1 0 0 1-.3 3.3 1.2a11.5 11.5 0 0 1 6 0C17.3 4.7 18.3 5 18.3 5c.6 1.6.2 2.8.1 3.1.8.8 1.2 1.8 1.2 3.1 0 4.4-2.7 5.4-5.3 5.7.4.4.8 1.1.8 2.2v3.3c0 .3.2.6.8.5A11.5 11.5 0 0 0 23.5 12C23.5 5.7 18.3.5 12 .5Z" />
                </svg>
                <span class="lg:hidden">View on GitHub</span>
            </a>

            <div class="my-2 h-px bg-zinc-200 lg:my-0 lg:ms-2 lg:h-6 lg:w-px"></div>

            {{-- Language switcher --}}
            <div class="zu-locale-switcher px-1 py-1 text-sm font-medium text-zinc-700">
                @include('zeus-translatable-pro::hooks.locale-switcher')
            </div>

            <a href="https://larazeus.com/translatable-pro" target="_blank" rel="noopener" class="mt-2 inline-flex items-center justify-center gap-1.5 rounded-lg bg-brand-600 px-3.5 py-2 text-sm font-semibold text-white shadow-sm shadow-brand-600/30 transition hover:bg-brand-700 lg:mt-0 lg:ms-1">
                Get Pro
                <svg class="size-4 rtl-flip" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h8.69L9.22 6.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 1 1-1.06-1.06l3.22-3.22H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>

        {{-- Hamburger --}}
        <label for="nav-toggle" class="flex size-9 cursor-pointer items-center justify-center rounded-lg text-zinc-600 hover:bg-zinc-100 lg:hidden" aria-label="Toggle menu">
            <svg class="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path d="M4 7h16M4 12h16M4 17h16" stroke-linecap="round" />
            </svg>
        </label>
    </nav>
</header>
