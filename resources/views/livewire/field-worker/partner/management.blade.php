<div>
    <x-slot name="header"><h2 class="text-xl text-gray-800 leading-tight">{{ __('Planning MPD') }}</h2></x-slot>

    <x-slot name="navigation">
        <x-nav-link href="{{ route('fieldworker.partners.index') }}">
            {{ __('MANAGEMENT PARTNERS') }}
        </x-nav-link>
    </x-slot>

    <x-section>
        <x-slot name="section_body">
            <form wire:submit.prevent="@if ($issetPartner) partnershipUpdate @else partnershipCreate @endif">
                <h2 class="font-light text-sm">{{ __('Maintenance expenses') }}:</h2>
                <div class="grid grid-cols-4 gap-2">
                    <div class="mt-1 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-700 sm:text-sm"> {{ __('Ministery:') }} </span>
                        </div>
                        <input type="number" wire:model.defer="ministery" required class="bg-slate-200 focus:ring-indigo-500 focus:border-indigo-500 text-right block w-full sm:text-sm border-gray-700 rounded-md">
                    </div>
                    <div class="mt-1 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-700 sm:text-sm"> {{ __('Medical care:') }} </span>
                        </div>
                        <input type="number" wire:model.defer="medical" required class="bg-slate-200 focus:ring-indigo-500 focus:border-indigo-500 text-right block w-full sm:text-sm border-gray-700 rounded-md">
                    </div>
                    <div class="mt-1 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-700 sm:text-sm"> {{ __('Administrative costs:') }} </span>
                        </div>
                        <input type="number" wire:model.defer="admin" required class="bg-slate-200 focus:ring-indigo-500 focus:border-indigo-500 text-right block w-full sm:text-sm border-gray-700 rounded-md">
                    </div>
                    <div class="mt-1 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-700 sm:text-sm"> {{ __('Other:') }} </span>
                        </div>
                        <input type="number" wire:model.defer="other" required class="bg-slate-200 focus:ring-indigo-500 focus:border-indigo-500 text-right block w-full sm:text-sm border-gray-700 rounded-md">
                    </div>

                    <div class="bg-indigo-300 w-full h-1 sm:col-span-4 rounded-lg"></div>

                    <div class="mt-1 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-700 sm:text-sm"> {{ __('Prebend:') }} </span>
                        </div>
                        <input type="number" min="0" wire:model.defer="rent" required class="bg-stone-200 focus:ring-indigo-500 focus:border-indigo-500 text-right block w-full sm:text-sm border-gray-700 rounded-md">
                    </div>
                    <div class="mt-1 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-700 sm:text-sm"> {{ __('Average Offer:') }} </span>
                        </div>
                        <input type="number" wire:model.defer="offer" required class="bg-stone-200 focus:ring-indigo-500 focus:border-indigo-500 text-right block w-full sm:text-sm border-gray-700 rounded-md">
                    </div>
                    <div class="mt-1 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-700 sm:text-sm"> {{ __('Target in Months:') }} </span>
                        </div>
                        <input type="number" wire:model.defer="monthto" required class="bg-sky-100 focus:ring-indigo-500 focus:border-indigo-500 text-right block w-full sm:text-sm border-gray-700 rounded-md">
                    </div>
                    <div class="my-1 relative">
                        <button type="submit" class="inline-flex w-full justify-center py-2 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md bg-gray-800 text-white hover:bg-black focus:outline-black focus:ring-2 focus:ring-offset-2 focus:ring-black">{{ __('Save') }}</button>
                        {{-- <x-button-submit /> --}}
                    </div>
                </div>
            </form>
        </x-slot>
    </x-section>

    @if ($issetPartner)
        <x-section>
            <x-slot name="section_body">

                <div class="shadow-lg overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-black px-4 py-3 sm:grid sm:grid-cols-1 col-span-2 sm:gap-1 sm:px-6">
                                <div class="text-sm font-medium text-gray-100">{{ __('GOAL')}}</div>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                {{-- 1 --}}
                                <div class="sm:grid sm:grid-cols-3 sm:gap-1 bg-gray-200 px-2 py-3 sm:px-6">
                                    <dt class="sm:col-span-2 text-gray-700 text-sm">                            {{ __('Monthly target') }}:</dt>
                                    <dd class="sm:col-span-1 text-gray-700 text-sm text-right">R$               {{ number_format($goal,2,',','.') }}</dd>
                                </div>
                                {{-- 2 --}}
                                <div class="sm:grid sm:grid-cols-3 sm:gap-1 bg-gray-200 px-2 py-3 sm:px-6">
                                    <dt class="sm:col-span-2 text-gray-700 text-sm">                            {{ __('Necessary partners') }}:</dt>
                                    <dd class="sm:col-span-1 text-gray-700 text-sm text-right">                 {{ $needPartner }}</dd>
                                </div>
                                {{-- 3 --}}
                                <div class="sm:grid sm:grid-cols-3 sm:gap-1 bg-white px-2 py-3 sm:px-6">
                                    <dt class="sm:col-span-2 text-gray-700 text-sm">                            {{ __('Monthly offer achieved') }}:</dt>
                                    <dd class="sm:col-span-1 text-gray-700 text-sm text-right">R$               {{ number_format($offerMonthly,2,',','.') }}</dd>
                                </div>
                                {{-- 4 --}}
                                <div class="sm:grid sm:grid-cols-3 sm:gap-1 bg-white px-2 py-3 sm:px-6">
                                    <dt class="sm:col-span-2 text-gray-700 text-sm">                            {{ __('Necessary encounters') }}:</dt>
                                    <dd class="sm:col-span-1 text-gray-700 text-sm text-right">                 {{ $needMeet }}</dd>
                                </div>
                                {{-- 5 --}}
                                <div class="sm:grid sm:grid-cols-3 sm:gap-1 bg-gray-200 px-2 py-3 sm:px-6">
                                    <dt class="sm:col-span-2 text-gray-700 text-sm">                            {{ __('Required value') }}:</dt>
                                    <dd class="sm:col-span-1 text-gray-700 text-sm text-right">R$               {{ number_format($needValue,2,',','.') }}</dd>
                                </div>
                                {{-- 6 --}}
                                <div class="sm:grid sm:grid-cols-3 sm:gap-1 bg-gray-200 px-2 py-3 sm:px-6">
                                    <dt class="sm:col-span-2 text-gray-700 text-sm">                            {{ __('Invitations needed') }}:</dt>
                                    <dd class="sm:col-span-1 text-gray-700 text-sm text-right">                 {{ $needInvite }}</dd>
                                </div>
                            </div>
                        </dl>
                    </div>
                </div>
            </x-slot>
        </x-section>

        <x-section>
            <x-slot name="section_body">
                <div class="grid grid-cols-2 gap-2">
                    <div class="shadow-lg overflow-hidden border-b border-slate-200 sm:rounded-lg">
                        <div class="border-t border-slate-200">
                            <dl>
                                <div class="bg-slate-700 px-4 py-3 sm:grid sm:grid-cols-2 sm:gap-1 sm:px-6">
                                    <div class="text-sm font-medium text-slate-100">{{ __('GOAL MONTHLY')}}</div>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:gap-1 bg-slate-200 px-2 py-3 sm:px-6">
                                    <dt class="sm:col-span-2 text-slate-700 text-sm">                                   {{ __('Target of new offers per month')}}:</dt>
                                    <dd class="sm:col-span-1 text-slate-700 text-sm text-right">R$                      {{ number_format($gmNewOffer,2,',','.') }}</dd>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:gap-1 bg-white px-2 py-3 sm:px-6">
                                    <dt class="sm:col-span-2 text-slate-700 text-sm">                                   {{ __('Partnerships needed each month')}}:</dt>
                                    <dd class="sm:col-span-1 text-slate-700 text-sm text-right">                        {{ $gmNeedPartner }}</dd>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:gap-1 bg-slate-200 px-2 py-3 sm:px-6">
                                    <dt class="sm:col-span-2 text-slate-700 text-sm">                                   {{ __('Meetings required each month')}}:</dt>
                                    <dd class="sm:col-span-1 text-slate-700 text-sm text-right">                        {{ $gmNeedMeet }}</dd>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:gap-1 bg-white px-2 py-3 sm:px-6">
                                    <dt class="sm:col-span-2 text-slate-700 text-sm">                                   {{ __('Invitations required each month')}}:</dt>
                                    <dd class="sm:col-span-1 text-slate-700 text-sm text-right">                        {{ $gmNeedInvite }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <div class="shadow-lg overflow-hidden border-b border-neutral-200 sm:rounded-lg bg-neutral-50">
                        <div class="border-t border-gray-200">
                            <dl>
                                <div class="bg-neutral-700 px-4 py-3 sm:grid sm:grid-cols-2 sm:gap-1 sm:px-6">
                                    <div class="text-sm font-medium text-neutral-100">{{ __('GOAL WEEKLY')}}</div>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:gap-1 bg-neutral-200 px-2 py-3 sm:px-6">
                                    <dt class="sm:col-span-2 text-neutral-700 text-sm">                                 {{ __('Target of new offers per week')}}:</dt>
                                    <dd class="sm:col-span-1 text-neutral-700 text-sm text-right">R$                    {{ number_format($gwNewOffer,2,',','.') }}</dd>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:gap-1 bg-white px-2 py-3 sm:px-6">
                                    <dt class="sm:col-span-2 text-neutral-700 text-sm">                                 {{ __('Partnerships needed each week')}}:</dt>
                                    <dd class="sm:col-span-1 text-neutral-700 text-sm text-right">                      {{ $gwNeedPartner }}</dd>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:gap-1 bg-neutral-200 px-2 py-3 sm:px-6">
                                    <dt class="sm:col-span-2 text-neutral-700 text-sm">                                 {{ __('Meetings required each week')}}:</dt>
                                    <dd class="sm:col-span-1 text-neutral-700 text-sm text-right">                      {{ $gwNeedMeet }}</dd>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:gap-1 bg-white px-2 py-3 sm:px-6">
                                    <dt class="sm:col-span-2 text-neutral-700 text-sm">                                 {{ __('Invitations needed each week')}}:</dt>
                                    <dd class="sm:col-span-1 text-neutral-700 text-sm text-right">                      {{ $gwNeedInvite }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="text-sm text-gray-400 mt-1 italic">{{ __('All fractional amounts have been rounded up.') }}</div>
            </x-slot>
        </x-section>

        <x-section>
            <x-slot name="section_body">
                <div class="flex">
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-100 bg-red-800   @if ( $progress === 0 )   border border-b-8 border-black rounded-full shadow-lg shadow-blue-400/50 @else opacity-25 rounded-l @endif">@if ( $progress === 0 )  {{ ceil($progress) }}% @endif</div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-100 bg-red-700   @if ( $progress > 0 &&  $progress <= 5 )   border border-b-8 border-black rounded-full shadow-lg shadow-red-400/50   @else opacity-25 @endif">  @if ( $progress > 0 &&  $progress <= 5 )  {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-100 bg-red-600   @if ( $progress > 5 && $progress  <= 10 )   border border-b-8 border-black rounded-full shadow-lg shadow-red-400/50  @else opacity-25 @endif">  @if ( $progress > 5 && $progress  <= 10 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-800 bg-red-500   @if ( $progress > 10 && $progress <= 15 )  border border-b-8 border-black rounded-full shadow-lg shadow-red-400/50   @else opacity-25 @endif">  @if ( $progress > 10 && $progress <= 15 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-800 bg-red-400   @if ( $progress > 15 && $progress <= 20 )  border border-b-8 border-black rounded-full shadow-lg shadow-red-400/50   @else opacity-25 @endif">  @if ( $progress > 15 && $progress <= 20 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-100 bg-amber-800 @if ( $progress > 20 && $progress <= 25 )  border border-b-8 border-black rounded-full shadow-lg shadow-amber-400/50 @else opacity-25 @endif">  @if ( $progress > 20 && $progress <= 25 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-100 bg-amber-700 @if ( $progress > 25 && $progress <= 30 )  border border-b-8 border-black rounded-full shadow-lg shadow-amber-400/50 @else opacity-25 @endif">  @if ( $progress > 25 && $progress <= 30 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-100 bg-amber-600 @if ( $progress > 30 && $progress <= 35 )  border border-b-8 border-black rounded-full shadow-lg shadow-amber-400/50 @else opacity-25 @endif">  @if ( $progress > 30 && $progress <= 35 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-800 bg-amber-500 @if ( $progress > 35 && $progress <= 40 )  border border-b-8 border-black rounded-full shadow-lg shadow-amber-400/50 @else opacity-25 @endif">  @if ( $progress > 35 && $progress <= 40 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-800 bg-amber-400 @if ( $progress > 40 && $progress <= 45 )  border border-b-8 border-black rounded-full shadow-lg shadow-amber-400/50 @else opacity-25 @endif">  @if ( $progress > 40 && $progress <= 45 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-800 bg-green-400 @if ( $progress > 45 && $progress <= 50 )  border border-b-8 border-black rounded-full shadow-lg shadow-green-400/50 @else opacity-25 @endif">  @if ( $progress > 45 && $progress <= 50 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-800 bg-green-500 @if ( $progress > 50 && $progress <= 55 )  border border-b-8 border-black rounded-full shadow-lg shadow-green-400/50 @else opacity-25 @endif">  @if ( $progress > 50 && $progress <= 55 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-100 bg-green-600 @if ( $progress > 55 && $progress <= 60 )  border border-b-8 border-black rounded-full shadow-lg shadow-green-400/50 @else opacity-25 @endif">  @if ( $progress > 55 && $progress <= 60 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-100 bg-green-700 @if ( $progress > 60 && $progress <= 65 )  border border-b-8 border-black rounded-full shadow-lg shadow-green-400/50 @else opacity-25 @endif">  @if ( $progress > 60 && $progress <= 65 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-100 bg-green-800 @if ( $progress > 65 && $progress <= 70 )  border border-b-8 border-black rounded-full shadow-lg shadow-green-400/50 @else opacity-25 @endif">  @if ( $progress > 65 && $progress <= 70 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-800 bg-blue-400  @if ( $progress > 70 && $progress <= 75 )  border border-b-8 border-black rounded-full shadow-lg shadow-blue-400/50 @else opacity-25  @endif">  @if ( $progress > 70 && $progress <= 75 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-800 bg-blue-500  @if ( $progress > 75 && $progress <= 80 )  border border-b-8 border-black rounded-full shadow-lg shadow-blue-400/50 @else opacity-25  @endif">  @if ( $progress > 75 && $progress <= 80 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-100 bg-blue-600  @if ( $progress > 80 && $progress <= 85 )  border border-b-8 border-black rounded-full shadow-lg shadow-blue-400/50 @else opacity-25  @endif">  @if ( $progress > 80 && $progress <= 85 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-100 bg-blue-700  @if ( $progress > 85 && $progress <= 90 )  border border-b-8 border-black rounded-full shadow-lg shadow-blue-400/50 @else opacity-25  @endif">  @if ( $progress > 85 && $progress <= 90 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-100 bg-blue-800  @if ( $progress > 90 && $progress <= 99 )  border border-b-8 border-black rounded-full shadow-lg shadow-blue-400/50 @else opacity-25  @endif">  @if ( $progress > 90 && $progress <= 99 ) {{ ceil($progress) }}% @endif </div>
                    <div class="py-1 w-20 text-center font-bold text-sm text-gray-100 bg-blue-900  @if ( $progress === 100)  border border-b-8 border-black rounded-full shadow-lg shadow-blue-400/50 @else opacity-25 rounded-r @endif">  @if ( $progress === 100) {{ ceil($progress) }}% @endif </div>
                </div>
            </x-slot>
        </x-section>
    @endif


</div>
