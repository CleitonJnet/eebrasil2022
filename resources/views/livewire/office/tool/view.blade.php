<div>
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('Tool') }}
        </h2>
    </x-slot>

    <x-slot name="navigation">
        <x-nav-link href="{{ route('office.categories.view',$tool->category_id) }}">
            {{ __('INDEX') }}
        </x-nav-link>
        <x-nav-link href="{{ route('office.tools.edit',$tool->id) }}">
            {{ __('EDIT') }}
        </x-nav-link>
        <x-nav-link href="{{ route('office.unities.create',$tool->id) }}">
            {{ __('NEW UNITY') }}
        </x-nav-link>
        <x-nav-link href="{{ route('office.schedule-defaults.index',$tool->id) }}">
            {{ __('SCHEDULE DEFAULT') }}
        </x-nav-link>
    </x-slot>

    <x-section>
        <x-slot name="section_title">
            <h2 class="text-xl text-gray-800 leading-tight">
                {{ $tool->name }}
            </h2>
        </x-slot>
        <x-slot name="section_body">
            <div class="bg-white rounded-lg p-4 sm:p-8">
                <h2 class="font-bold pb-3">{{ __('DESCRIPTION') }}:</h2>
                {{ $tool->description }}
            </div>
            <div class="bg-white rounded-lg p-4 sm:p-8 mt-2">
                <h2 class="font-bold pb-3">{{ __('KNOW HOW') }}:</h2>
                {{ $tool->knowhow }}
            </div>

            <x-separate />

            @if ($tool->unities->count() > 0)
            <x-table>
                <x-slot name="table_body">
                    <x-slot name="table_head">
                        <x-table-th> <x-slot name="thead_th">{{ __('Order') }} </x-slot></x-table-th>
                        <x-table-th> <x-slot name="thead_th">{{ __('Name') }} </x-slot></x-table-th>
                        @if ($tool->unities()->where('devotional','!=',null)->count()>0)
                        <x-table-th> <x-slot name="thead_th">{{ __('Devotional') }} </x-slot></x-table-th>
                        @endif
                        <x-table-th> <x-slot name="thead_th">{{ __('Duration') }} </x-slot></x-table-th>
                    </x-slot>
                    @foreach ($tool->unities()->orderBy('order')->get() as $unity)
                    <tr class="hover:bg-indigo-50 cursor-pointer" onclick="window.location.replace('{{ route('office.unities.edit',$unity->id) }}');">
                        <td class="px-6 py-4 whitespace-nowrap" style="width: 100px">
                            <div class="text-sm font-extrabold text-gray-900 flex items-center">
                                {{ __('Unity ') }} {{ $unity->order }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-extrabold text-gray-900 flex items-center">
                                {{ $unity->name }}
                            </div>
                        </td>
                        @if ($tool->unities()->where('devotional','!=',null)->count()>0)
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-extrabold text-gray-900 flex items-center">
                                {{ $unity->devotional }}
                            </div>
                        </td>
                        @endif
                        <td class="px-6 py-4 whitespace-nowrap" style="width: 100px">
                            <div class="text-sm font-extrabold text-gray-900 flex items-center">
                                {{ date('H:i',strtotime($unity->duration)) }}
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
