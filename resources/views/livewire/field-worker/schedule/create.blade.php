<div>
    <x-slot name="header"><h2 class="text-xl text-gray-800 leading-tight">{{ __('New section') }}</h2></x-slot>

    <x-section>
        <x-slot name="section_body">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                <div class="px-4 sm:px-0 text-center md:text-right pt-6">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $training->tool->name }}</h3>
                </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow-md overflow-hidden sm:rounded-md">
                    <form wire:submit.prevent="scheduleCreate">
                        <div class="px-4 py-5 bg-white sm:p-6 grid grid-cols-6 gap-4">
                            <div class="col-span-6 sm:col-span63">
                                <label for="unity" class="block text-sm font-medium text-gray-700">{{ __('Unity') }}</label>
                                <div class="mt-1 rounded-md shadow-sm">
                                    <select id="unity" wire:model="unity" name="unity" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="" hidden>{{ __('Select') }}</option>
                                        <optgroup label="{{ __('Select Interval') }}">
                                            @foreach ($intervals as $interval)
                                            <option value="{{ $interval->id }}">{{ $interval->name }}</option>
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="{{ __('Select Unity to: '). $tool_name }}">
                                            @foreach ($unities as $unity)
                                            <option value="{{ $unity->id }}">{{ $unity->name }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                  </div>
                                @error('unity') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-full">
                                <label for="date" class="block text-sm font-medium text-gray-700">{{ __('Date') }}</label>
                                <input type="date" wire:model="date" name="date" id="date" placeholder="{{ __('Date') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('date') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>

                            <div class="col-span-full">
                                <label for="start" class="block text-sm font-medium text-gray-700">{{ __('Start') }}</label>
                                <input type="time" wire:model="start" name="start" id="start" placeholder="{{ __('Start') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('start') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>

                            <div class="col-span-full">
                                <label for="end" class="block text-sm font-medium text-gray-700">{{ __('End') }}</label>
                                <input type="time" wire:model="end" name="end" id="end" placeholder="{{ __('End') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('end') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>

                        </div>
                        <div class="px-4 py-3 bg-gray-600 text-right sm:px-6">
                            <x-button-submit />
                            <x-button-index href="{{ route('fieldworker.schedules.index',$training->id) }}" />
                        </div>
                    </form>
                </div>
                </div>
          </div>
        </x-slot>
    </x-section>
</div>
