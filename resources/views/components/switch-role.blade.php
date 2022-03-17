{{-- Roles Dropdown --}}
<div class="ml-3 relative">
    <x-jet-dropdown align="right" width="60">
        <x-slot name="trigger">
            <span class="inline-flex rounded-md">
                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-300 bg-gray-700 hover:bg-gray-800 hover:text-gray-200 focus:outline-none focus:bg-gray-900 active:bg-gray-800 transition">

                    @switch(explode('.',Illuminate\Support\Facades\Route::currentRouteName())[0])
                    @case('fieldworker')
                    {{ __('FieldWorker') }}
                    @break

                    @case('office')
                    {{ __('Office') }}
                    @break

                    @case('director')
                    {{ __('National Director') }}
                    @break

                    @case('facilitator')
                    {{ __('Facilitator') }}
                    @break

                    @default
                        {{ __('Switch Role') }}
                    @endswitch

                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </span>
        </x-slot>

        <x-slot name="content">
            <div class="w-60">
                <!-- Role Switcher -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Switch Role') }}
                </div>

                <div class="overflow-y" style="max-height: 150px;">

                    <x-jet-dropdown-link href="{{ route('director.dashboard') }}">
                        <div class="flex">
                            @if (request()->routeIs('director.*')) <svg class="mr-2 h-5 w-5 text-green-300" fill="green" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            @else <svg class="mr-2 h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> @endif
                            {{ App\Models\Role::find(3)->name }}
                        </div>
                    </x-jet-dropdown-link>

                    <x-jet-dropdown-link href="{{ route('fieldworker.dashboard') }}">
                        <div class="flex">
                            @if (request()->routeIs('fieldworker.*')) <svg class="mr-2 h-5 w-5 text-green-300" fill="green" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            @else <svg class="mr-2 h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> @endif
                            {{ App\Models\Role::find(5)->name }}
                        </div>
                    </x-jet-dropdown-link>

                    <x-jet-dropdown-link href="{{ route('facilitator.dashboard') }}">
                        <div class="flex">
                            @if (request()->routeIs('facilitator.*')) <svg class="mr-2 h-5 w-5 text-green-300" fill="green" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            @else <svg class="mr-2 h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> @endif
                            {{ App\Models\Role::find(10)->name }}
                        </div>
                    </x-jet-dropdown-link>

                    <x-jet-dropdown-link href="{{ route('office.dashboard') }}">
                        <div class="flex">
                            @if (request()->routeIs('office.*')) <svg class="mr-2 h-5 w-5 text-green-300" fill="green" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            @else <svg class="mr-2 h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> @endif
                            {{ App\Models\Role::find(4)->name }}
                        </div>
                    </x-jet-dropdown-link>


                </div>

                <div class="border-t border-gray-100"></div>

                <!-- Team Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Role') }}
                </div>

                <!-- Team Settings -->
                <x-jet-dropdown-link href="#">
                    {{ __('Role Settings') }}
                </x-jet-dropdown-link>

            </div>
        </x-slot>
    </x-jet-dropdown>
</div>
