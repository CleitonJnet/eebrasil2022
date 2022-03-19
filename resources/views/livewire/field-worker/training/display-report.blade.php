<div class="py-6" wire:poll>
    <x-section>
        <x-slot name="section_body">
            <div class="shadow-md overflow-hidden border-b border-gray-500 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-400">
                    <thead>
                        <tr>
                            <th scope="col" colspan="3" class="px-6 py-3 text-left font-bold text-black uppercase tracking-wider break-words bg-white">{{ __('Date') }}: <span class="text-orange-700">{{ date('D',strtotime($date)) }}, {{ date('d-m-Y',strtotime($date)) }}</span></th>

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
                        @foreach ($training->ojts()->where('date',$date)->get() as $onjob)
                        <tr>
                            <td class="text-sm font-medium text-center py-3 px-4 border-b border-gray-500 text-gray-900 bg-yellow-200">{{  $it++ }}</td>
                            <td class="text-sm font-medium text-left   py-3 px-4 border-b border-gray-500 text-gray-900 bg-yellow-200">Pr. João</td>
                            <td class="text-sm font-medium text-left   py-3 px-4 border-b border-gray-500 text-gray-900 bg-yellow-200">Teste</td>
                            <td class="text-sm font-medium text-center py-3  border-b border-gray-500 text-gray-900 bg-lime-200">X</td>
                            <td class="text-sm font-medium text-center py-3  border-b border-gray-500 text-gray-900 bg-lime-200">X</td>
                            <td class="text-sm font-medium text-center py-3  border-b border-gray-500 text-gray-900 bg-lime-200">X</td>
                            <td class="text-sm font-medium text-center py-3  border-b border-gray-500 text-gray-900 bg-lime-200">X</td>
                            <td class="text-sm font-medium text-center py-3  border-b border-gray-500 text-gray-900 bg-fuchsia-200">10</td>
                            <td class="text-sm font-medium text-center py-3  border-b border-gray-500 text-gray-900 bg-fuchsia-200">10</td>
                            <td class="text-sm font-medium text-center py-3  border-b border-gray-500 text-gray-900 bg-orange-200">10</td>
                            <td class="text-sm font-medium text-center py-3  border-b border-gray-500 text-gray-900 bg-orange-200">10</td>
                            <td class="text-sm font-medium text-center py-3  border-b border-gray-500 text-gray-900 bg-orange-200">10</td>
                            <td class="text-sm font-medium text-center py-3  border-b border-gray-500 text-gray-900 bg-orange-200">10</td>
                            <td class="text-sm font-medium text-center py-3  border-b border-gray-500 text-gray-900 bg-sky-200">10</td>
                            <td class="text-sm font-medium text-center py-3  border-b border-gray-500 text-gray-900 bg-sky-200">10</td>
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
</x-slot>
    </x-section>
</div>
