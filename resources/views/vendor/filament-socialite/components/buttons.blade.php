@props([
    'type' => 'login',
])

@if (count($providers))
    <div class="relative flex items-center justify-center text-center">
        <div class="absolute border-t border-gray-200 w-full h-px"></div>
        <p class="inline-block relative bg-white text-sm p-2 rounded-full font-medium text-gray-500 dark:bg-gray-800 dark:text-gray-100">
            {{ $type === 'login' ? __('filament-socialite::auth.login-via') : __('filament-socialite::auth.register-via') }}
        </p>
    </div>

    <div @class(['grid gap-4', 'grid-cols-2' => count($providers) > 1])>
        @foreach($providers as $key => $provider)
            <x-filament::button
                :color="$provider['color'] ?? 'secondary'"
                :icon="$provider['icon'] ?? null"
                tag="a"
                :href="route('socialite.oauth.redirect', $key)"
            >
                {{ $provider['label'] }}
            </x-filament::button>
        @endforeach
    </div>
@else
    <span></span>
@endif
