{{ \Filament\Facades\Filament::renderHook('footer.before') }}

<div class="filament-footer flex items-center justify-center">
    {{ \Filament\Facades\Filament::renderHook('footer.start') }}

    @if (config('filament.layout.footer.should_show_logo'))
        <a href="{{ config('filament.brand_url') }}"
            class="text-gray-300 transition hover:text-primary-500"
        >
            <strong class="font-bold italic text-xl">
                {{ config('filament.brand') }}
            </strong>
        </a>
    @endif

    {{ \Filament\Facades\Filament::renderHook('footer.end') }}
</div>

{{ \Filament\Facades\Filament::renderHook('footer.after') }}
