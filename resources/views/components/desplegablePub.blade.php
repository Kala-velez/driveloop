<div class="relative inline-flex items-center" x-data="{ open: false }">
    <x-breeze::nav-link as="button" type="button" class="inline-flex items-center" :active="request()->routeIs('publicacion.vehiculo') || request()->routeIs('vehiculos.*')"
        @click="open = !open" @click.outside="open = false">
        <span class="inline-flex items-center">
            {{ __('Vehículos') }}
            <svg class="ml-2 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.94l3.71-3.71a.75.75 0 1 1 1.06 1.06l-4.24 4.24a.75.75 0 0 1-1.06 0L5.21 8.29a.75.75 0 0 1 .02-1.08z"
                    clip-rule="evenodd" />
            </svg>
        </span>
    </x-breeze::nav-link>

    <div x-cloak x-show="open" x-transition
        class="absolute left-0 top-full z-50 mt-2 w-56 rounded-md bg-white shadow-lg ring-1 ring-black/5">
        <div class="py-1">
            <x-dropdown-link :href="route('publicacion.vehiculo')">
                {{ __('Mis Vehículos') }}
            </x-dropdown-link>

            <x-dropdown-link :href="route('vehiculos.create')">
                {{ __('Publica tu vehículo') }}
            </x-dropdown-link>
        </div>
    </div>
</div>
