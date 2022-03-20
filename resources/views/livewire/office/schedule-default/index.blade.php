<div>
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ $tool_name }}
        </h2>
    </x-slot>

    <x-slot name="navigation">
        <x-nav-link href="{{ route('office.tools.view',$tool_id) }}">
            {{ __('INDEX TOOL') }}
        </x-nav-link>
        <x-nav-link href="{{ route('office.schedule-defaults.create',$tool_id) }}">
            {{ __('NEW SECTION') }}
        </x-nav-link>
    </x-slot>

    <x-section>
        <x-slot name="section_title">
            <h3 class="text-lg leading-6 font-medium text-gray-900">{{ __('Schedule Default') }}</h3>
        </x-slot>
        <x-slot name="section_body">
            <x-table>
                <x-slot name="table_head">
                    <x-table-th> <x-slot name="thead_th">{{ __('Date') }} </x-slot></x-table-th>
                    <x-table-th> <x-slot name="thead_th">{{ __('Time') }} </x-slot></x-table-th>
                    <x-table-th> <x-slot name="thead_th">{{ __('Unity Name') }} </x-slot></x-table-th>
                </x-slot>
                <x-slot name="table_body">
                    @foreach ($schedules as $schedule)
                    <tr class="hover:bg-indigo-50 cursor-pointer" onclick="window.location.replace('{{ route('office.schedule-defaults.edit',$schedule->id) }}');">
                        <td class="px-6 py-3 whitespace-nowrap" style="width: 150px">
                            <div class="text-sm text-gray-700">{{ date('d-m-Y',strtotime($schedule->date)) }}</div>
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap" style="width: 150px">
                            <div class="text-sm text-gray-700">{{ date('H:i',strtotime($schedule->start)) }} - {{ date('H:i',strtotime($schedule->end)) }}</div>
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="text-sm text-gray-700">{{ $schedule->unity->name }}</div>
                        </td>
                    </tr>
                    @endforeach
                </x-slot>
            </x-table>
        </x-slot>
    </x-section>
</div>
