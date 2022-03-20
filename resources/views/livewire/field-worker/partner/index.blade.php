<div>
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('Management Partners') }}
        </h2>
    </x-slot>

    <x-slot name="navigation">
        <x-nav-link href="{{ route('fieldworker.partners.management',isset(Auth::user()->partnership()->first()->id)? Auth::user()->partnership()->first()->id : null) }}">
            {{ __('PLANNING MPD') }}
        </x-nav-link>
        <x-nav-link href="{{ route('fieldworker.partners.create') }}">
            {{ __('NEW  PARTNER') }}
        </x-nav-link>
    </x-slot>

    <x-section>
        <x-slot name="section_body">
            <x-input_search autofocus>
                <x-slot name="optionSearch">
                    <option value="partners.name">{{ __('Name') }}</option>
                    <option value="partners.email">{{ __('Email') }}</option>
                    <option value="partners.city">{{ __('City') }}</option>
                    <option value="partners.state">{{ __('State') }}</option>
                </x-slot>
            </x-input_search>

            @if ($partners->count() > 0)
            <div class="pl-0 md:pl-4">{{ $partners->links() }}</div>
            <x-table>
                <x-slot name="table_head">
                    <x-table-th> <x-slot name="thead_th">{{ __('Name') }} </x-slot></x-table-th>
                    <x-table-th> <x-slot name="thead_th">{{ __('Place') }} </x-slot></x-table-th>
                    <x-table-th> <x-slot name="thead_th">{{ __('Value') }}/ {{ __('Period') }} </x-slot></x-table-th>
                    <x-table-th> <x-slot name="thead_th">{{ __('Status') }} </x-slot></x-table-th>
                </x-slot>
                <x-slot name="table_body">
                    @foreach ($partners as $partner)
                    <tr class="hover:bg-indigo-50 cursor-pointer" onclick="window.location.replace('{{ route('fieldworker.partners.view',$partner->id) }}');">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <a href="{{ route('fieldworker.partners.view',$partner->id) }}">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="fill-slate-600 hover:fill-sky-900" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                            <g>
                                                <path d="M500,10C229.4,10,10,229.4,10,500c0,270.6,219.4,490,490,490c270.6,0,490-219.4,490-490C990,229.4,770.6,10,500,10L500,10z M500,924C265.8,924,76,734.2,76,500S265.8,76,500,76c234.2,0,424,189.8,424,424S734.2,924,500,924z"/>
                                                <path d="M168.7,487.5l38,20.3c0,0,17.3,10.3,26.4-8.9l94-204.7c0,0,8.9-17.5-5.6-25.7L280,247.4c0,0-12.8-7.5-21.2,8.3c-0.3,6.3-96.4,208.6-96.4,208.6S156.2,480.8,168.7,487.5L168.7,487.5L168.7,487.5z M788.4,508.3l38.7-18.6c0,0,18.5-7.8,9.6-27.2l-96.7-203.3c0,0-7.7-18-22.9-11.2l-41.4,20.9c0,0-13.6,5.9-6.9,22.5c4.6,4.2,98.1,207.9,98.1,207.9S775.7,514.4,788.4,508.3L788.4,508.3L788.4,508.3z M260.7,507.6l12.8-28.2l44.9,59.1c0,0,29.2-7,39.4,12.1c0,0,9.6,11.6,5.4,33.4c0,0,6,4.6,6.5,7.4c0,0,20.1-5.1,32.2,9.8c0,0,11.1,9.2,9.8,27.2c0,0,8,3.6,9.6,8.5c0,0,19.7-5.1,29.3,6.9c0,0,11.7,11.4,10.8,24.7l18.3,14c0,0,17.1,1.5,19.8,15.4l16.4,12.7c0,0,26.3,10.8,27.8-16.5l-61.7-49c0,0-7.2-19.7,15.4-16.7l92,67.5c0,0,15.1,6.7,24.2-8.2c0,0,8.9-12.8-3.7-26.7l-97.9-73.7c0,0-8.6-20.6,13.6-19L642,653.7c0,0,16.5,6.8,23.4-6c0,0,9.4-12.8,0-26l-128.2-97.4c0,0-7.7-23.4,16.3-17.3l132.2,98.1c0,0,20,6.6,28.9-10.4c0,0,11.3-18.3-3.9-33.3l-187-169.9c0,0-34.8-17.3-55.5,18.9c0,0-3.6,59-66.5,69.7c0,0-42.9-3.4-32.9-32.8c0,0,12.6-17.4,11.5-53.9c0,0,1.4-26.2,18.9-48.6h-67.3l14.8-31.9h101.7c0,0,41.8-24.7,73.3-22.4c0,0,41.1,2.3,52.1,8.9c0,0,54.4,18.1,78.8,13.9l91,196.5L729,544.1c0,0,26.6,28.5,7,63.1c-5.5,11.6-19.5,22.8-42.5,23.9c0,0,3.5,23.3-12.6,36.5c0,0-11.8,16.9-40.5,12.2c0,0,1.6,20.6-17.4,34.3c0,0-22.6,20.2-57.5-4.4c0,0-5.6,23.2-33.5,27.9c0,0-20.3,3.3-32.2-8.6c0,0-21.3,41.8-51.6,18.3c0,0-19.2-16.6-5.7-40c0,0-25.9,42.6-56.6,10.6c0,0-17-13.3-1.3-41.3c0,0-24.4,28.9-51.2,2.7c0,0-18.3-15.6-3.7-44.6c0,0-24.9,30.8-54,1.4c0,0-12.2-11.7-5.2-37.7l28.1-40L260.7,507.6L260.7,507.6z"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-bold text-gray-900">{{ $partner->name }}</div>
                                    <div class="text-sm font-light text-gray-500 italic flex items-center">
                                        <a href="tel:{{ $partner->phone }}" class="flex items-center">
                                            <svg class="mx-1 fill-gray-500 w-3 h-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.942 53.942" style="enable-background:new 0 0 53.942 53.942;" xml:space="preserve">
                                                <path d="M53.364,40.908c-2.008-3.796-8.981-7.912-9.288-8.092c-0.896-0.51-1.831-0.78-2.706-0.78c-1.301,0-2.366,0.596-3.011,1.68 c-1.02,1.22-2.285,2.646-2.592,2.867c-2.376,1.612-4.236,1.429-6.294-0.629L17.987,24.467c-2.045-2.045-2.233-3.928-0.632-6.291 c0.224-0.309,1.65-1.575,2.87-2.596c0.778-0.463,1.312-1.151,1.546-1.995c0.311-1.123,0.082-2.444-0.652-3.731 c-0.173-0.296-4.291-7.27-8.085-9.277c-0.708-0.375-1.506-0.573-2.306-0.573c-1.318,0-2.558,0.514-3.49,1.445L4.7,3.986 c-4.014,4.013-5.467,8.562-4.321,13.52c0.956,4.132,3.742,8.529,8.282,13.068l14.705,14.705c5.746,5.746,11.224,8.66,16.282,8.66 c0,0,0,0,0.001,0c3.72,0,7.188-1.581,10.305-4.698l2.537-2.537C54.033,45.163,54.383,42.833,53.364,40.908z"/>
                                            </svg>
                                            {{ "(".substr($partner->phone, 0, 2).") ".substr($partner->phone, 2, 5)." ".substr($partner->phone,7) }}</a>
                                            |
                                            <svg class="mx-1 fill-gray-500 w-3 h-3" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z"/>
                                            </svg>
                                            <a href="mailto:{{ $partner->email }}">{{ $partner->email }}
                                        </a>
                                    </div>
                               </div>
                            </div>
                        </td>
                        <td class="px-6 py-2 whitespace-nowrap">
                            <div class="text-sm font-bold text-gray-900">{{ $partner->street }}, {{ $partner->number }}</div>
                            <div class="text-sm font-light text-gray-500 italic">{{ $partner->neighborhood }}, {{ $partner->city }} - {{ $partner->state }}</div>
                        </td>
                        <td class="px-6 py-2 whitespace-nowrap">
                            <div class="text-sm font-bold text-gray-900">$ {{ number_format($partner->value,2,',','.') }}</div>
                            <div class="text-sm font-light text-gray-500 italic">{{ $partner->period }}</div>
                        </td>
                        <td class="px-6 py-2 whitespace-nowrap">
                            @switch($partner->status)
                                @case("Active")
                                <span class="text-green-500 font-bold">Active</span>
                                @break

                                @case("Inactive")
                                <span class="text-red-600 font-bold">Inactive</span>
                                @break

                                @default

                            @endswitch
                        </td>
                    </tr>
                    @endforeach
                </x-slot>
            </x-table>
            <div class="pl-0 md:pl-4 mt-1">{{ $partners->links() }}</div>
            @endif
        </x-slot>
    </x-section>
    <x-section>
        <x-slot name="section_body">
            <div class="md:grid grid-cols-12 gap-6">
                <div class="shadow overflow-hidden sm:rounded-lg col-span-5">
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-9">{{ __('Total de parceiros com oferta unica')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-3 text-right">{{ $partnerUnique }}</dd>
                            </div>
                            <div class="bg-gray-200 px-4 py-3 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-9">{{ __('Total de parceiros com oferta mensal')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-3 text-right">{{ $partnerMouthly }}</dd>
                            </div>
                            <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-9">{{ __('Total de parceiros com oferta anual')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-3 text-right">{{ $partnerYearly }}</dd>
                            </div>
                            <div class="bg-gray-200 px-4 py-3 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-9">{{ __('Total de parceiros ativos')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-3 text-right">{{ $partnerActive }}</dd>
                            </div>
                            <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-9">{{ __('Total de parceiros Inativos')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-3 text-right">{{ $partnerInactve }}</dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="shadow overflow-hidden sm:rounded-lg col-span-7">
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-9">{{ __('Valor total de parceiros contribuindo uma vez')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-3 text-right">R$ {{ number_format($valueUnique,2,',','.') }}</dd>
                            </div>
                            <div class="bg-gray-200 px-4 py-3 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-9">{{ __('Valor total de parceiros contribuindo por mês')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-3 text-right">R$ {{ number_format($valueMouthly,2,',','.') }}</dd>
                            </div>
                            <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-9">{{ __('Valor total de parceiros contribuindo por ano')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-3 text-right">R$ {{ number_format($valueYearly,2,',','.') }}</dd>
                            </div>
                            <div class="bg-gray-200 px-4 py-3 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-9">{{ __('Calculo para recebimentos mensais')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-3 text-right">R$ {{ number_format($totValue,2,',','.') }}</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </x-slot>
    </x-section>
</div>
