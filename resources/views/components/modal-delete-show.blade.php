<x-navigation><x-slot name="navigation">
    <a href="#" wire:click.prevent="showConfirmation" class="px-4 py-1 rounded text-white bg-red-600 hover:bg-red-500">Delete</a>
</x-slot></x-navigation>
<x-jet-confirmation-modal wire:model="showJetstreamModal">
    <x-slot name="title">{{ __('Delete register') }}</x-slot>
    <x-slot name="content">{{ __('Be careful when deleting this record as there may be other records associated with it.') }}</x-slot>
    <x-slot name="footer">
        <a href="#" wire:click.prevent="remove" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">{{ __('Delete') }}</a>
    </x-slot>
</x-jet-confirmation-modal>

