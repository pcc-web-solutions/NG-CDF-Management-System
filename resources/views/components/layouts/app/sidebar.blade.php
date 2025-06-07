<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-white-800">
        <flux:sidebar sticky stashable class="border-e border-white-200 bg-white-50 dark:border-white-700 dark:bg-white-900">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
                <x-app-logo />
            </a>

            <flux:navlist variant="outline">
                <flux:navlist.group :heading="__('Main Menu')" class="grid">
                    <flux:navlist.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>{{ __('Back Home') }}</flux:navlist.item>
                    <flux:navlist.item icon="user" :href="route('applications')" :current="request()->routeIs('applications')" wire:navigate>{{ __('Applications') }}</flux:navlist.item>
                    <flux:navlist.item icon="home" :href="route('projects')" :current="request()->routeIs('projects')" wire:navigate>{{ __('Projects') }}</flux:navlist.item>
                    <flux:navlist.item icon="home" :href="route('disbursements')" :current="request()->routeIs('disbursements')" wire:navigate>{{ __('Disbursement') }}</flux:navlist.item>
                    <flux:navlist.item icon="book-open-text" :href="route('reports')" :current="request()->routeIs('reports')" wire:navigate>{{ __('Reports') }}</flux:navlist.item>
                </flux:navlist.group>
            </flux:navlist>

            {{-- <flux:spacer /> --}}

            <flux:navlist variant="outline">
                <flux:navlist.group :heading="__('Location Selector')" class="grid">
                    <flux:navlist.item icon="globe-alt" :href="route('countries.index')" :current="request()->routeIs('countries.*')" wire:navigate>{{ __('Countries') }}</flux:navlist.item>
                    <flux:navlist.item icon="map" :href="route('counties.index')" :current="request()->routeIs('counties.*')" wire:navigate>{{ __('Counties') }}</flux:navlist.item>
                    <flux:navlist.item icon="home" :href="route('sub-counties.index')" :current="request()->routeIs('sub-counties.*')" wire:navigate>{{ __('Sub-Counties') }}</flux:navlist.item>
                    <flux:navlist.item icon="home" :href="route('wards.index')" :current="request()->routeIs('wards.*')" wire:navigate>{{ __('Wards') }}</flux:navlist.item>
                    <flux:navlist.item icon="home" :href="route('locations.index')" :current="request()->routeIs('locations.*')" wire:navigate>{{ __('Locations') }}</flux:navlist.item>
                    <flux:navlist.item icon="home" :href="route('sub-locations.index')" :current="request()->routeIs('sub-locations.*')" wire:navigate>{{ __('Sub-Locations') }}</flux:navlist.item>
                    <flux:navlist.item icon="home" :href="route('villages.index')" :current="request()->routeIs('villages.*')" wire:navigate>{{ __('Villages') }}</flux:navlist.item>
                </flux:navlist.group>
            </flux:navlist>

            <flux:spacer />

            <!-- Desktop User Menu -->
            <flux:dropdown position="bottom" align="start">
                <flux:profile
                    :name="auth()->user()->name"
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevrons-up-down"
                />

                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />

                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        @fluxScripts
        @livewireScripts
    </body>
</html>
