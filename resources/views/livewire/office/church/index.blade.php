<div  class="pb-12">
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('Churches') }}
        </h2>
    </x-slot>

    <x-navigation>
        <x-slot name="navigation">
            <x-nav-link href="{{ route('office.churches.create') }}">
                {{ __('NEW CHURCH') }}
            </x-nav-link>
        </x-slot>
    </x-navigation>

    <x-section>
        <x-slot name="section_body">
            <x-input_search autofocus>
                <x-slot name="optionSearch">
                    <option value="churches.name">{{ __('Name') }}</option>
                    <option value="churches.pastor">{{ __('Pastor') }}</option>
                    <option value="churches.contact">{{ __('Contact') }}</option>
                    <option value="churches.city">{{ __('City') }}</option>
                    <option value="churches.state">{{ __('State') }}</option>
                </x-slot>
            </x-input_search>

            @if ($churches->count() > 0)
            <div class="pl-0 md:pl-4">{{ $churches->links() }}</div>
            <x-table>
                <x-slot name="table_head">
                    <x-table-th> <x-slot name="thead_th">{{ __('Name') }} </x-slot></x-table-th>
                    <x-table-th> <x-slot name="thead_th">{{ __('Contact') }} </x-slot></x-table-th>
                    <x-table-th> <x-slot name="thead_th">{{ __('Place') }} </x-slot></x-table-th>
                </x-slot>
                <x-slot name="table_body">
                    @foreach ($churches as $church)
                    <tr class="hover:bg-indigo-50 cursor-pointer" onclick="window.location.replace('{{ route('office.churches.view',$church->id) }}');">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <a href="{{ route('office.churches.view',$church->id) }}">
                                        <img src="{{ asset('img/church.svg') }}" alt="...">
                                    </a>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-bold text-gray-900">
                                        {{ $church->name }}
                                    </div>
                                    <div class="text-sm text-gray-500 flex align-center">
                                        <svg class="mr-1 fill-gray-500 w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24 14.6c0 .6-1.2 1-2.6 1.2-.9-1.7-2.7-3-4.8-3.9.2-.3.4-.5.6-.8h.8c3.1-.1 6 1.8 6 3.5zM6.8 11H6c-3.1 0-6 1.9-6 3.6 0 .6 1.2 1 2.6 1.2.9-1.7 2.7-3 4.8-3.9l-.6-.9zm5.2 1c2.2 0 4-1.8 4-4s-1.8-4-4-4-4 1.8-4 4 1.8 4 4 4zm0 1c-4.1 0-8 2.6-8 5 0 2 8 2 8 2s8 0 8-2c0-2.4-3.9-5-8-5zm5.7-3h.3c1.7 0 3-1.3 3-3s-1.3-3-3-3c-.5 0-.9.1-1.3.3.8 1 1.3 2.3 1.3 3.7 0 .7-.1 1.4-.3 2zM6 10h.3C6.1 9.4 6 8.7 6 8c0-1.4.5-2.7 1.3-3.7C6.9 4.1 6.5 4 6 4 4.3 4 3 5.3 3 7s1.3 3 3 3z"/>
                                        </svg>
                                        Pastor: <span class="italic">{{ $church->pastor }}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-bold text-gray-700">Contato: <span class="italic">{{ $church->contact }}</span></div>
                            <div class="text-sm text-gray-500 italic flex items-center">
                                <svg class="mx-1 fill-gray-500 w-3 h-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.942 53.942" style="enable-background:new 0 0 53.942 53.942;" xml:space="preserve">
                                    <path d="M53.364,40.908c-2.008-3.796-8.981-7.912-9.288-8.092c-0.896-0.51-1.831-0.78-2.706-0.78c-1.301,0-2.366,0.596-3.011,1.68 c-1.02,1.22-2.285,2.646-2.592,2.867c-2.376,1.612-4.236,1.429-6.294-0.629L17.987,24.467c-2.045-2.045-2.233-3.928-0.632-6.291 c0.224-0.309,1.65-1.575,2.87-2.596c0.778-0.463,1.312-1.151,1.546-1.995c0.311-1.123,0.082-2.444-0.652-3.731 c-0.173-0.296-4.291-7.27-8.085-9.277c-0.708-0.375-1.506-0.573-2.306-0.573c-1.318,0-2.558,0.514-3.49,1.445L4.7,3.986 c-4.014,4.013-5.467,8.562-4.321,13.52c0.956,4.132,3.742,8.529,8.282,13.068l14.705,14.705c5.746,5.746,11.224,8.66,16.282,8.66 c0,0,0,0,0.001,0c3.72,0,7.188-1.581,10.305-4.698l2.537-2.537C54.033,45.163,54.383,42.833,53.364,40.908z"/>
                                </svg>
                                {{ "(".substr($church->contact_phone, 0, 2).") ".substr($church->contact_phone, 2, 5)." ".substr($church->contact_phone,7) }}
                                |
                                <svg class="mx-1 fill-gray-500 w-3 h-3" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z"/>
                                </svg>
                                {{ $church->contact_email }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-bold text-gray-700">{{ $church->neighborhood }}</div>
                            <div class="text-sm text-gray-500"><span class="italic">{{ $church->city }}</span> / {{ $church->state }}</div>
                        </td>
                    </tr>
                    @endforeach
                </x-slot>
            </x-table>
            <div class="pl-0 md:pl-4 mt-1">{{ $churches->links() }}</div>
            @endif
        </x-slot>
    </x-section>
</div>
