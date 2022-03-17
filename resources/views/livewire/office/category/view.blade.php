<div class="pb-12">
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <x-navigation>
        <x-slot name="navigation">
            <x-nav-link href="{{ route('office.categories.index') }}">
                {{ __('INDEX') }}
            </x-nav-link>
            <x-nav-link href="{{ route('office.categories.edit',$category->id) }}">
                {{ __('EDIT') }}
            </x-nav-link>
            <x-nav-link href="{{ route('office.tools.create',$category->id) }}">
                {{ __('NEW TOOL') }}
            </x-nav-link>
        </x-slot>
    </x-navigation>

    <x-section>
        <x-slot name="section_title">
            <h2 class="text-xl text-gray-800 leading-tight">
                {{ $category->name }}
            </h2>
        </x-slot>
        <x-slot name="section_body">
            <div class="bg-white rounded-lg p-4 sm:p-8">
                <h2 class="font-bold pb-3">{{ __('DESCRIPTION') }}:</h2>
                {{ $category->description }}
            </div>
            <div class="bg-white rounded-lg p-4 sm:p-8 mt-2">
                <h2 class="font-bold pb-3">{{ __('KNOW HOW') }}:</h2>
                {{ $category->knowhow }}
            </div>
            @if ($category->tools->count() > 0)
            <x-separate />
            <x-table>
                <x-slot name="table_head">
                    <x-table-th> <x-slot name="thead_th">{{ __('Tool name') }} </x-slot></x-table-th>
                </x-slot>
                <x-slot name="table_body">
                    @foreach ($category->tools as $tool)
                    <tr class="hover:bg-indigo-50 cursor-pointer" onclick="window.location.replace('{{ route('office.tools.view',$tool->id) }}');">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-extrabold text-gray-900 flex items-center">
                                {{ $tool->name }}
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </x-slot>
            </x-table>
            @endif

        </x-slot>
    </x-section>
    @include('components.modal-delete-show')




</div>
