<div  class="pb-12">
    <x-slot name="header"><h2 class="text-xl text-gray-800 leading-tight">{{ __('Where Are We') }}</h2></x-slot>
    {{-- <a href="#" wire:click.prevent="insertUF">INSERT</a> --}}

    <x-section>
        <x-slot name="section_body">
            <div class="grid grid-cols-12 gap-10" style="">
                <div class="col-span-12 sm:col-span-3">
                    <div class="flex flex-col pb-4 m-4" x-data="{dataMinMap = 0; dataMaxMap = 0}">
                            <div class="text-center mb-1 px-2 py-2 uppercase font-bold text-indigo-900             ">Igrejas treinadas:</div>
                            <div @mouseover="dataMinMap = #00ff00" @mouseout="dataMinMap = #fff000" class="text-center mt-1 px-4 py-1 rounded   font-bold text-blue-900  bg-white   ">Nenhuma           </div>
                            <div class="text-center mt-1 px-4 py-1 rounded   font-bold text-sky-900   bg-blue-50 ">01 a 05           </div>
                            <div class="text-center mt-1 px-4 py-1 rounded   font-bold text-sky-800   bg-blue-100">06 a 10           </div>
                            <div class="text-center mt-1 px-4 py-1 rounded   font-bold text-sky-700   bg-blue-200">11 a 15           </div>
                            <div class="text-center mt-1 px-4 py-1 rounded   font-bold text-sky-700   bg-blue-300">16 a 20           </div>
                            <div class="text-center mt-1 px-4 py-1 rounded   font-bold text-sky-800   bg-blue-400">21 a 25           </div>
                            <div class="text-center mt-1 px-4 py-1 rounded   font-bold text-sky-50    bg-blue-500">26 a 30           </div>
                            <div class="text-center mt-1 px-4 py-1 rounded   font-bold text-sky-50    bg-blue-600">31 a 35           </div>
                            <div class="text-center mt-1 px-4 py-1 rounded   font-bold text-sky-100   bg-blue-700">36 a 40           </div>
                            <div class="text-center mt-1 px-4 py-1 rounded   font-bold text-sky-200   bg-blue-800">41 de 50          </div>
                            <div class="text-center mt-1 px-4 py-1 rounded   font-bold text-sky-200   bg-blue-900">Mais de 50        </div>
                    </div>
                </div>

                @php
                    $totCh = App\Models\Church::where('state','RJ')->count();
                    function colorChurch($totCh){
                        if($totCh > 0 && $totCh <= 5)         { return $color = 'fill-blue-50';
                        }elseif ($totCh > 6 && $totCh <= 10)  { return $color = 'fill-blue-100';
                        }elseif ($totCh > 10 && $totCh <= 15) { return $color = 'fill-blue-200';
                        }elseif ($totCh > 15 && $totCh <= 20) { return $color = 'fill-blue-300';
                        }elseif ($totCh > 20 && $totCh <= 25) { return $color = 'fill-blue-400';
                        }elseif ($totCh > 25 && $totCh <= 30) { return $color = 'fill-blue-500';
                        }elseif ($totCh > 30 && $totCh <= 35) { return $color = 'fill-blue-600';
                        }elseif ($totCh > 35 && $totCh <= 40) { return $color = 'fill-blue-700';
                        }elseif ($totCh > 40 && $totCh <= 50) { return $color = 'fill-blue-800';
                        }elseif ($totCh > 50)                 { return $color = 'fill-blue-900';
                        }else { return $color = 'fill-white';
                        }
                    }
                @endphp

                <div class="col-span-12 sm:col-span-6">
                    <svg xmlns="http://www.w3.org/2000/svg" stroke="black" stroke-width="1" width="612.51611" height="639.04297" mapsvg:geoViewBox="-74.008595 5.275696 -34.789914 -33.743888">
                        @foreach (App\Models\Zone::all() as $zone)
                            <g><a class="{{ colorChurch(App\Models\Church::where('state',$zone->initial)->count()) }} hover:fill-red-600" href="#" wire:click.prevent="verifyState({{ $zone->id }})"><title>{{ $zone->name }}</title><path title="{{ $zone->name }}" d="{{ $zone->path }}" /></a></g>
                        @endforeach
                    </svg>
                </div>
                <div class="col-span-12 sm:col-span-3 bg-gray-700 rounded-lg p-4" style="background-image: url('{{ asset('img/mapInfo.svg') }}'); background-size: 40%; background-position: 105% 98%; background-repeat: no-repeat;">
                    <h5 class="text-gray-200 font-bold uppercase text-center mb-4">{{ __('Informações dos Estados') }}</h5>
                    @if ($totPerChurch !== null)

                        <ul class="mb-4">
                            <li class="text-gray-100 border-b border-gray-600 py-2 text-sm flex justify-between"><span>Estado:</span> <span class="text-gray-300">{{ $consult->initial }}</span></li>
                            <li class="text-gray-100 border-b border-gray-600 py-2 text-sm flex justify-between"><span>Igrejas treinadas:</span> <span class="text-gray-300">{{ $totPerChurch }}</span></li>
                            <li class="text-gray-100 border-b border-gray-600 py-2 text-sm flex justify-between"><span>População:</span> <span class="text-gray-300">{{ $population }}</span></li>
                        </ul>

                        <h5 class="text-gray-400 font-bold uppercase pt-4 pb-2 text-sm">Religião da população:</h5>
                        <ul>
                            <li class="text-gray-100 border-b border-gray-600 py-2 text-sm flex justify-between"><span>Protestantismo:</span> <span class="text-gray-300">{{ $protestantism }}%</span></li>
                            <li class="text-gray-100 border-b border-gray-600 py-2 text-sm flex justify-between"><span>Catolicismo:</span> <span class="text-gray-300">{{ $catholicism }}%</span></li>
                            <li class="text-gray-100 border-b border-gray-600 py-2 text-sm flex justify-between"><span>Sem Religião:</span> <span class="text-gray-300">{{ $atheism }}%</span></li>
                        <ul>
                    @else
                        <h5 class="text-center text-gray-400 italic">Clique no estado para as informações...</h5>
                    @endif
                </div>
            </div>
        </x-slot>
    </x-section>
    <script>
        function verifiyMap(data)
        {
            return this.style.backgroundColor = "#ff00ff"
        }
    </script>
</div>
