<div  class="pb-12">
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('Event') }}
        </h2>
    </x-slot>

    <x-navigation>
        <x-slot name="navigation">
            <x-nav-link href="{{ route('office.trainings.view',$training->id) }}">
                {{ __('EVENT') }}
            </x-nav-link>
        </x-slot>
    </x-navigation>

    <x-section>
        <x-slot name="section_title">
            <h3 class="text-lg leading-6 font-medium text-gray-900">{{ __('Training') }}: <span class="text-gray-500">{{ $training->tool->name }}</span></h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ __('Details')}}</p>
        </x-slot>

        <x-slot name="section_body">

            <div class="md:grid grid-cols-2 gap-2">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('Teacher')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $training->user->name }}</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('Date')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ date('d-m-Y',strtotime($training->date)) }}</dd>
                    </div>
                </dl>
            </div>

        </x-slot>
    </x-section>

    <x-section>
        <x-slot name="section_title">
            <h3 class="text-lg leading-6 font-medium text-gray-900">{{ __('Training Mode') }}: <span class="text-gray-500">{{ Str::ucfirst($training->type) }}</span></h3>
        </x-slot>

        <x-slot name="section_body">

            <div class="md:grid grid-cols-12 gap-2">
                <div class="col-span-7">
                    <dl>
                        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500 col-span-6 sm:col-span-2">{{ __('Pastor')}}:</dt>
                            <dd class="mt-1 text-sm text-gray-500 sm:mt-0 col-span-6 sm:col-span-5">{{ $training->church->pastor }}</dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-5500 col-span-600 sm:col-span-2">{{ __('Phone')}}:</dt>
                            <dd class="mt-1 text-sm text-gray-500 sm:mt-0 col-span-6 sm:col-span-5">{{ "(".substr($training->church->phone, 0, 2).") ".substr($training->church->phone, 2, 5)." ".substr($training->church->phone,7) }}</dd>
                        </div>
                        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500 col-span-6 sm:col-span-2">{{ __('E-mail')}}:</dt>
                            <dd class="mt-1 text-sm text-gray-500 sm:mt-0 col-span-6 sm:col-span-5">{{ $training->church->email }}</dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500 col-span-6 sm:col-span-2">{{ __('Address')}}:</dt>
                            <dd class="mt-1 text-sm text-gray-500 sm:mt-0 col-span-6 sm:col-span-5">{{ $training->church->street }}{{ ($training->church->number)?', '.$training->church->number:'' }}{{ ($training->church->complement)?', '.$training->church->complement:'' }}{{ ($training->church->neighborhood)?', '.$training->church->neighborhood:'' }}{{ ($training->church->city)?', '.$training->church->city:'' }}{{ ($training->church->state)?', '.$training->church->state:'' }}{{ ($training->church->zipcode)?' - '.$training->church->zipcode:'' }}</dd>
                        </div>
                    </dl>
                </div>
                <dl class="col-span-5">
                    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500 col-span-6 sm:col-span-2">{{ __('Contact')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 col-span-6 sm:col-span-4">{{ $training->church->contact }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500 col-span-6 sm:col-span-2">{{ __('Phone')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 col-span-6 sm:col-span-4">{{ "(".substr($training->church->contact_phone, 0, 2).") ".substr($training->church->contact_phone, 2, 5)." ".substr($training->church->contact_phone,7) }}</dd>
                    </div>
                    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500 col-span-6 sm:col-span-2">{{ __('E-mail')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 col-span-6 sm:col-span-4">{{ $training->church->contact_email }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500 col-span-6 sm:col-span-2">{{ __('URL')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 col-span-6 sm:col-span-4">{{ $training->url }}</dd>
                    </div>
                </dl>
            </div>

        </x-slot>
    </x-section>

    <x-section>
        <x-slot name="section_body">

            <div class="md:grid grid-cols-2 gap-2">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('Churches')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $training->students->count() }}</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('Participants')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $training->students->count() }}</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('Pastors')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $training->students->count() }}</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('Decisions')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $training->students->count() }}</dd>
                    </div>
                </dl>
            </div>

        </x-slot>
    </x-section>

    <x-section>
        <x-slot name="section_title">
            <h3 class="text-lg leading-6 font-medium text-gray-900">{{ __('Result of OJTs') }}</h3>
        </x-slot>
        <x-slot name="section_body">

            <div
            x-data="{
                openTab: 0,
                activeClasses:      'inline-block py-4 text-sm font-medium text-center w-full text-gray-50  rounded-t-lg bg-stone-600',
                inactiveClasses:    'inline-block py-4 text-sm font-medium text-center w-full text-gray-700 rounded-t-lg bg-stone-100 cursor-pointer hover:bg-stone-300 hover:text-stone-900',
            }"
            class="bg-stone-600 sm:rounded-lg"
             >
                <ul class="flex flex-wrap border-b border-stone-400 bg-stone-200">
                    <li @click="openTab = 0" style="width: {{ $widthp }}%">
                        <a :class="openTab === 0 ? activeClasses : inactiveClasses">RESULT</a>
                    </li>
                    {{-- LOOP PARA DIAS DE TREINAMENTO --}}
                    @for ($i = 1;$i <= $ojtsDays;$i++)
                    <li
                        @click="openTab = {{ $i }}"
                        style="width: {{ $widthp }}%" >

                        <a :class="
                                openTab === {{ $i }}
                                ?
                                activeClasses
                                :
                                inactiveClasses">
                            DAY {{ $i }}
                        </a>

                    </li>
                    @endfor
                </ul>

                <div class="px-2 pb-2" {{ $item = 1 }} {{ $it = 1 }}>

                    <div x-show="openTab === 0" class="shadow-md overflow-hidden border-b border-gray-500 sm:rounded-lg mt-2">
                        <table class="min-w-full divide-y divide-gray-400 sm:rounded-lg" style="font-size: 10pt">
                            <thead>
                                <tr>
                                    <th scope="col" rowspan="4" class="px-6 py-3 text-left text-xs font-bold text-gray-200 uppercase tracking-wider break-words bg-gray-700" style="width: 100px">{{ __('Period') }}:</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-200 uppercase tracking-wider break-words bg-gray-700"></th>
                                    @for ($i = 1;$i <= $ojtsDays;$i++)
                                    <th scope="col" class="py-3 border-x text-center text-xs font-bold text-gray-200 uppercase tracking-wider break-words bg-gray-700" style="width: 65px">DAY {{ $i }}</th>
                                    @endfor
                                    <th scope="col" class="py-3 border-x text-center text-xs font-bold text-gray-200 uppercase tracking-wider break-words bg-gray-700" style="width: 65px">{{ __('Total') }}</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-400">
                                <tr>
                                    <td rowspan="4" class="text-sm font-medium text-center p-4 border text-gray-900 bg-lime-300">TIPO DE CONTATO</td>
                                    <td class="text-sm font-medium text-left px-4 py-2 border text-gray-900 bg-lime-300">Visitante da Igreja</td>
                                    @foreach ($ojts as $ojt)
                                    <td class="text-sm font-medium text-center py-2 border text-gray-900 bg-lime-200">10</td>
                                    @endforeach
                                    <td class="text-sm font-medium text-center py-2 border text-white bg-gray-700">10</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-medium text-left px-4 py-2 border text-gray-900 bg-lime-300">Questionário de Segunraça</td>
                                    @foreach ($ojts as $ojt)
                                    <td class="text-sm font-medium text-center py-2 border text-gray-900 bg-lime-200">10</td>
                                    @endforeach
                                    <td class="text-sm font-medium text-center py-2 border text-white bg-gray-700">10</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-medium text-left px-4 py-2 border text-gray-900 bg-lime-300">Indicação</td>
                                    @foreach ($ojts as $ojt)
                                    <td class="text-sm font-medium text-center py-2 border text-gray-900 bg-lime-200">10</td>
                                    @endforeach
                                    <td class="text-sm font-medium text-center py-2 border text-white bg-gray-700">10</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-medium text-left px-4 py-2 border text-gray-900 bg-lime-300">Estilo de Vida</td>
                                    @foreach ($ojts as $ojt)
                                    <td class="text-sm font-medium text-center py-2 border text-gray-900 bg-lime-200">10</td>
                                    @endforeach
                                    <td class="text-sm font-medium text-center py-2 border text-white bg-gray-700">10</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" class="text-sm font-medium text-center p-4 border break-words text-gray-900 bg-fuchsia-300">EVANGELHO EXPLICADO</td>
                                    <td class="text-sm font-medium text-left px-4 py-2 border text-gray-900 bg-fuchsia-300">Quantas vezes?</td>
                                    @foreach ($ojts as $ojt)
                                    <td class="text-sm font-medium text-center py-2 border text-gray-900 bg-fuchsia-200">10</td>
                                    @endforeach
                                    <td class="text-sm font-medium text-center py-2 border text-white bg-gray-700">10</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-medium text-left px-4 py-2 border text-gray-900 bg-fuchsia-300">Para quantas pessoas?</td>
                                    @foreach ($ojts as $ojt)
                                    <td class="text-sm font-medium text-center py-2 border text-gray-900 bg-fuchsia-200">10</td>
                                    @endforeach
                                    <td class="text-sm font-medium text-center py-2 border text-white bg-gray-700">10</td>
                                </tr>
                                <tr>
                                    <td rowspan="4" class="text-sm font-medium text-center p-4 border text-gray-900 bg-orange-300">RESULTADO</td>
                                    <td class="text-sm font-medium text-left px-4 py-2 border text-gray-900 bg-orange-300">Decisão</td>
                                    @foreach ($ojts as $ojt)
                                    <td class="text-sm font-medium text-center py-2 border text-gray-900 bg-orange-200">10</td>
                                    @endforeach
                                    <td class="text-sm font-medium text-center py-2 border text-white bg-gray-700">10</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-medium text-left px-4 py-2 border text-gray-900 bg-orange-300">Sem decisão/ Interessado</td>
                                    @foreach ($ojts as $ojt)
                                    <td class="text-sm font-medium text-center py-2 border text-gray-900 bg-orange-200">10</td>
                                    @endforeach
                                    <td class="text-sm font-medium text-center py-2 border text-white bg-gray-700">10</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-medium text-left px-4 py-2 border text-gray-900 bg-orange-300">Rejeição</td>
                                    @foreach ($ojts as $ojt)
                                    <td class="text-sm font-medium text-center py-2 border text-gray-900 bg-orange-200">10</td>
                                    @endforeach
                                    <td class="text-sm font-medium text-center py-2 border text-white bg-gray-700">10</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-medium text-left px-4 py-2 border text-gray-900 bg-orange-300">Para Segunrança/ Já é crente</td>
                                    @foreach ($ojts as $ojt)
                                    <td class="text-sm font-medium text-center py-2 border text-gray-900 bg-orange-200">10</td>
                                    @endforeach
                                    <td class="text-sm font-medium text-center py-2 border text-white bg-gray-700">10</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" class="text-sm font-medium text-center p-4 border text-gray-900 bg-sky-300">ACOMPANHAMENTO</td>
                                    <td class="text-sm font-medium text-left px-4 py-2 border text-gray-900 bg-sky-300">Acomp. Espiritual (Meios de Crescimento)</td>
                                    @foreach ($ojts as $ojt)
                                    <td class="text-sm font-medium text-center py-2 border text-gray-900 bg-sky-200">10</td>
                                    @endforeach
                                    <td class="text-sm font-medium text-center py-2 border text-white bg-gray-700">10</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-medium text-left px-4 py-2 border text-gray-900 bg-sky-300">Acomp. agendado para 7 dias após</td>
                                    @foreach ($ojts as $ojt)
                                    <td class="text-sm font-medium text-center py-2 border text-gray-900 bg-sky-200">10</td>
                                    @endforeach
                                    <td class="text-sm font-medium text-center py-2 border text-white bg-gray-700">10</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    @foreach ($ojts as $ojt)

                    <div x-show="openTab === {{ $item++ }}" class="shadow-md overflow-hidden border-b border-gray-500 sm:rounded-lg mt-2">
                        <table class="min-w-full divide-y divide-gray-400">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="3" class="px-6 py-3 text-left font-bold text-black uppercase tracking-wider break-words bg-white">{{ __('Date') }}: <span class="text-orange-700">{{ date('D',strtotime($ojt->date)) }}, {{ date('d-m-Y',strtotime($ojt->date)) }}</span></th>

                                    <th scope="col" colspan="4" class="px-6 py-3 text-center text-xs font-bold text-black uppercase tracking-wider break-words bg-lime-300" style="max-width: 100px;">{{ __('Tipo de Contato') }}</th>
                                    <th scope="col" colspan="2" class="py-3 text-center text-xs font-bold text-black uppercase tracking-wider break-words bg-fuchsia-300" style="max-width: 50px; font-size: 8.7pt">{{ __('Evangelho Explicado') }}</th>
                                    <th scope="col" colspan="4" class="px-6 py-3 text-center text-xs font-bold text-black uppercase tracking-wider break-words bg-orange-300" style="max-width: 100px;">{{ __('Result') }}</th>
                                    <th scope="col" colspan="2" class="px-2 py-3 text-center text-xs font-bold text-black uppercase tracking-wider break-words truncate bg-sky-300" style="max-width: 50px;" title="{{ __('Follow-up') }}">{{ __('Follow-up') }}</th>
                                </tr>
                                <tr>
                                    <th scope="col" colspan="3" class="p-4  text-xs font-bold text-gray-800 border bg-yellow-300"  style="">{{ __('TEAMS') }}:</th>

                                    <th scope="col" rowspan="2" style="width: 25px; writing-mode: vertical-lr;" class="p-4 text-right text-xs font-bold text-black border bg-lime-300"   >Visitante da Igreja</th>
                                    <th scope="col" rowspan="2" style="width: 25px; writing-mode: vertical-lr;" class="p-4 text-right text-xs font-bold text-black border bg-lime-300"   >Questionário de Segurança</th>
                                    <th scope="col" rowspan="2" style="width: 25px; writing-mode: vertical-lr;" class="p-4 text-right text-xs font-bold text-black border bg-lime-300"   >Indicação</th>
                                    <th scope="col" rowspan="2" style="width: 25px; writing-mode: vertical-lr;" class="p-4 text-right text-xs font-bold text-black border bg-lime-300"   >Estilo de Vida</th>
                                    <th scope="col" rowspan="2" style="width: 25px; writing-mode: vertical-lr;" class="p-4 text-right text-xs font-bold text-black border bg-fuchsia-300">Quantas Vezes</th>
                                    <th scope="col" rowspan="2" style="width: 25px; writing-mode: vertical-lr;" class="p-4 text-right text-xs font-bold text-black border bg-fuchsia-300">Para Quantas Pessoas</th>
                                    <th scope="col" rowspan="2" style="width: 25px; writing-mode: vertical-lr;" class="p-4 text-right text-xs font-bold text-black border bg-orange-300" >Decisão</th>
                                    <th scope="col" rowspan="2" style="width: 25px; writing-mode: vertical-lr;" class="p-4 text-right text-xs font-bold text-black border bg-orange-300" >Sem Decisão/ Interessado</th>
                                    <th scope="col" rowspan="2" style="width: 25px; writing-mode: vertical-lr;" class="p-4 text-right text-xs font-bold text-black border bg-orange-300" >Rejeição</th>
                                    <th scope="col" rowspan="2" style="width: 25px; writing-mode: vertical-lr;" class="p-4 text-right text-xs font-bold text-black border bg-orange-300" >Para Segunraça/ Já é Crente</th>
                                    <th scope="col" rowspan="2" style="width: 25px; writing-mode: vertical-lr;" class="p-4 text-right text-xs font-bold text-black border bg-sky-300"    >Acomp... Imediato. (Meios de Crescimento)</th>
                                    <th scope="col" rowspan="2" style="width: 25px; writing-mode: vertical-lr;" class="p-4 text-right text-xs font-bold text-black border bg-sky-300"    >Visita Agendada (7 dias após)</th>
                                </tr>
                                <tr style="max-height: 35px">
                                    <th scope="col" class="p-4 text-center text-xs font-bold text-gray-800 border bg-yellow-300" style="width: 5%; height:45px;">{{ __('Nº') }}:</th>
                                    <th scope="col" class="p-4 text-left text-xs font-bold text-gray-800 border bg-yellow-300"  style="width: 25%; height:45px;">{{ __('MENTORS') }}:</th>
                                    <th scope="col" class="p-4 text-left text-xs font-bold text-gray-800 border bg-yellow-300"  style="width: 70%; height:45px;">{{ __('STUDENTS') }}:</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-400" {{ $it = 1 }}>
                                @foreach ($training->ojts()->where('date',$ojt->date)->get() as $onjob)
                                <tr>
                                    <td class="text-sm font-medium text-center py-3 px-4 border            text-gray-900 bg-yellow-200">{{  $it++ }}</td>
                                    <td class="text-sm font-medium text-left   py-3 px-4 border            text-gray-900 bg-yellow-200">Pr. João</td>
                                    <td class="text-sm font-medium text-left   py-3 px-4 border            text-gray-900 bg-yellow-200">Teste</td>
                                    <td class="text-sm font-medium text-center py-3  border text-gray-900 bg-lime-200">X</td>
                                    <td class="text-sm font-medium text-center py-3  border text-gray-900 bg-lime-200">X</td>
                                    <td class="text-sm font-medium text-center py-3  border text-gray-900 bg-lime-200">X</td>
                                    <td class="text-sm font-medium text-center py-3  border text-gray-900 bg-lime-200">X</td>
                                    <td class="text-sm font-medium text-center py-3  border text-gray-900 bg-fuchsia-200">10</td>
                                    <td class="text-sm font-medium text-center py-3  border text-gray-900 bg-fuchsia-200">10</td>
                                    <td class="text-sm font-medium text-center py-3  border text-gray-900 bg-orange-200">10</td>
                                    <td class="text-sm font-medium text-center py-3  border text-gray-900 bg-orange-200">10</td>
                                    <td class="text-sm font-medium text-center py-3  border text-gray-900 bg-orange-200">10</td>
                                    <td class="text-sm font-medium text-center py-3  border text-gray-900 bg-orange-200">10</td>
                                    <td class="text-sm font-medium text-center py-3  border text-gray-900 bg-sky-200">10</td>
                                    <td class="text-sm font-medium text-center py-3  border text-gray-900 bg-sky-200">10</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="divide-y divide-gray-400">
                                <tr>
                                    <td class="text-sm font-medium text-center py-2 border text-gray-200 bg-gray-700">10</td>
                                    <td class="text-sm font-medium text-center py-2 border-y text-gray-200 bg-gray-700"></td>
                                    <td class="text-sm font-medium text-center py-2 border-y text-gray-200 bg-gray-700"></td>
                                    <td class="text-sm font-medium text-center py-2 border text-gray-200 bg-gray-700">10</td>
                                    <td class="text-sm font-medium text-center py-2 border text-gray-200 bg-gray-700">10</td>
                                    <td class="text-sm font-medium text-center py-2 border text-gray-200 bg-gray-700">10</td>
                                    <td class="text-sm font-medium text-center py-2 border text-gray-200 bg-gray-700">10</td>
                                    <td class="text-sm font-medium text-center py-2 border text-gray-200 bg-gray-700">10</td>
                                    <td class="text-sm font-medium text-center py-2 border text-gray-200 bg-gray-700">10</td>
                                    <td class="text-sm font-medium text-center py-2 border text-gray-200 bg-gray-700">10</td>
                                    <td class="text-sm font-medium text-center py-2 border text-gray-200 bg-gray-700">10</td>
                                    <td class="text-sm font-medium text-center py-2 border text-gray-200 bg-gray-700">10</td>
                                    <td class="text-sm font-medium text-center py-2 border text-gray-200 bg-gray-700">10</td>
                                    <td class="text-sm font-medium text-center py-2 border text-gray-200 bg-gray-700">10</td>
                                    <td class="text-sm font-medium text-center py-2 border text-gray-200 bg-gray-700">10</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    @endforeach
                </div>




            </div>
            <x-separate />
        </x-slot>
    </x-section>

    <x-section>
        <x-slot name="section_body">
            <dl>
                <div class="bg-white rounded px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500 sm:col-span-3 uppercase">{{ __('Comment')}}:</dt>
                    <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-3">{{ $training->comment }}</dd>
                </div>
            </dl>
        </x-slot>
    </x-section>

    @include('components.modal-delete-show')
</div>
