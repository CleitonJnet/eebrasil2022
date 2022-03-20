<div>
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('OJTs') }}
        </h2>
    </x-slot>

    <x-slot name="navigation">
        <x-nav-link href="{{ route('fieldworker.ojts.create') }}">
            {{ __('NEW PRATIC') }}
        </x-nav-link>
        <x-nav-link href="{{ route('fieldworker.trainings.report',$training->id) }}">
            {{ __('REPORT') }}
        </x-nav-link>
        <x-nav-link href="{{ route('fieldworker.trainings.view',$training->id) }}">
            {{ __('EVENT') }}
        </x-nav-link>
    </x-slot>

    <x-section>
        <x-slot name="section_body">
            <x-input_search autofocus>
                <x-slot name="optionSearch">
                    <option value="ojts.host">{{ __('Host') }}</option>
                </x-slot>
            </x-input_search>

            @if ($ojts->count() > 0)
            <div class="pl-0 md:pl-4">{{ $ojts->links() }}</div>
            <x-table>
                <x-slot name="table_head">
                    <x-table-th> <x-slot name="thead_th">{{ __('Name') }} </x-slot></x-table-th>
                    <x-table-th> <x-slot name="thead_th">{{ __('Place') }} </x-slot></x-table-th>
                    <x-table-th> <x-slot name="thead_th">{{ __('Status') }} </x-slot></x-table-th>
                </x-slot>
                <x-slot name="table_body">
                    @foreach ($ojts as $ojt)
                    <tr class="hover:bg-indigo-50 cursor-pointer" onclick="window.location.replace('{{ route('fieldworker.ojts.view',$ojt->id) }}');">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <a href="{{ route('fieldworker.users.view',$ojt->id) }}">
                                        <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('img/placeholder.svg') }}" alt="{{ $ojt->name }}" />
                                    </a>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-bold text-gray-900">{{ $ojt->host }}</div>
                                    <div class="text-sm text-gray-500 flex items-center">
                                        <svg class="mx-1 fill-gray-500 w-3 h-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.942 53.942" style="enable-background:new 0 0 53.942 53.942;" xml:space="preserve">
                                            <path d="M53.364,40.908c-2.008-3.796-8.981-7.912-9.288-8.092c-0.896-0.51-1.831-0.78-2.706-0.78c-1.301,0-2.366,0.596-3.011,1.68 c-1.02,1.22-2.285,2.646-2.592,2.867c-2.376,1.612-4.236,1.429-6.294-0.629L17.987,24.467c-2.045-2.045-2.233-3.928-0.632-6.291 c0.224-0.309,1.65-1.575,2.87-2.596c0.778-0.463,1.312-1.151,1.546-1.995c0.311-1.123,0.082-2.444-0.652-3.731 c-0.173-0.296-4.291-7.27-8.085-9.277c-0.708-0.375-1.506-0.573-2.306-0.573c-1.318,0-2.558,0.514-3.49,1.445L4.7,3.986 c-4.014,4.013-5.467,8.562-4.321,13.52c0.956,4.132,3.742,8.529,8.282,13.068l14.705,14.705c5.746,5.746,11.224,8.66,16.282,8.66 c0,0,0,0,0.001,0c3.72,0,7.188-1.581,10.305-4.698l2.537-2.537C54.033,45.163,54.383,42.833,53.364,40.908z"/>
                                        </svg>
                                        {{ "(".substr($ojt->phone, 0, 2).") ".substr($ojt->phone, 2, 5)." ".substr($ojt->phone,7) }} |
                                        <svg class="mx-1 fill-gray-500 w-3 h-3" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z"/>
                                        </svg>
                                        <span class="italic">{{ $ojt->email }}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-bold text-gray-700">{{ $ojt->neighborhood }}</div>
                            <div class="text-sm text-gray-500"><span class="italic">{{ $ojt->city }}</span> / {{ $ojt->state }}</div>
                        </td>
                        <td></td>
                    </tr>
                    @endforeach
                </x-slot>
            </x-table>
            <div class="pl-0 md:pl-4 mt-1">{{ $ojts->links() }}</div>
            @endif

        </x-slot>
    </x-section>
</div>
