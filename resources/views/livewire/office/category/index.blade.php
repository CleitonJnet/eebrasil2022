<div>
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <x-slot name="navigation">
        <x-nav-link href="{{ route('office.trainings.index') }}">
            {{ __('CALENDAR') }}
        </x-nav-link>
        <x-nav-link href="{{ route('office.categories.create') }}">
            {{ __('NEW CATEGORY') }}
        </x-nav-link>
    </x-slot>

    <x-section>
        <x-slot name="section_body">
            <div class="my-1 relative rounded-md shadow-sm">
                <input type="text" id="price" wire:model="search" wire:keydown.escape="search_clear()" style="padding-left: 2rem" autofocus class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Search">
            </div>

            @if ($categories->count() > 0)
            <x-table>
                <x-slot name="table_head">
                    <x-table-th> <x-slot name="thead_th">{{ __('Name') }} </x-slot></x-table-th>
                </x-slot>
                <x-slot name="table_body">
                    @foreach ($categories as $category)
                    <tr class="hover:bg-indigo-50 cursor-pointer" onclick="window.location.replace('{{ route('office.categories.view',$category->id) }}');">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-extrabold text-gray-900 flex items-center">
                                {{ $category->name }}
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </x-slot>
            </x-table>
            @endif
        </x-slot>
    </x-section>
</div>
