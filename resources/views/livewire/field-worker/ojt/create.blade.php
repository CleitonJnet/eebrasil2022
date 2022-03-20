<div>
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('Pratic Create') }}
        </h2>
    </x-slot>

    <x-slot name="navigation">
        <x-nav-link href="{{ route('fieldworker.ojts.index') }}">
            {{ __('OJT') }}
        </x-nav-link>
    </x-slot>

    <x-section>
        <x-slot name="section_title">
        </x-slot>
        <x-slot name="section_body">
        </x-slot>
    </x-section>
</div>
