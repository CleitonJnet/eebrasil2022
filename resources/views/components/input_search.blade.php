<div class="my-1 relative rounded-md shadow-sm">
    <div class="absolute inset-y-0 left-0 flex items-center">
        <select id="currency" wire:model="collum" class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
            @if (isset($optionSearch))
                {{ $optionSearch }}
            @endif
        </select>
    </div>
    <input {{ $attributes }} type="text" id="price" wire:model="search" wire:keydown.escape="search_clear()" style="padding-left: 7rem" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Search">
</div>
