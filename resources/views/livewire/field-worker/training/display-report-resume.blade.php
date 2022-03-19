<div class="py-6" wire:poll>
    <x-section>
        <x-slot name="section_body">
            <div class="shadow-md overflow-hidden border-b border-gray-500 sm:rounded-lg">

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
        </x-slot>
    </x-section>
</div>
