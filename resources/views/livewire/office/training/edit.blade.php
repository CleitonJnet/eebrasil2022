<div>
    <x-slot name="header"><h2 class="text-xl text-gray-800 leading-tight">{{ __('Edit Event') }}</h2></x-slot>

    <x-section>
        <x-slot name="section_body">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                <div class="px-4 sm:px-0 text-center md:text-right pt-6">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">{{ __("Event's Information") }}</h3>
                </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow-md overflow-hidden sm:rounded-md">
                    <form wire:submit.prevent="eventUpdate">
                        <div class="px-4 py-5 bg-white">
                            <label for="tool" class="block text-sm font-medium text-gray-700">{{ __('Tool') }}</label>
                            <select id="tool" wire:model="tool" name="tool" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="" hidden>{{ __('Select') }}</option>
                                @foreach (App\Models\Tool::orderBy('name')->get() as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                            @error('tool') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="px-4 pb-5 bg-white">
                            <label for="teacher" class="block text-sm font-medium text-gray-700">{{ __('Teacher') }}</label>
                            <select id="teacher" wire:model="teacher" name="teacher" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="" hidden>{{ __('Select') }}</option>
                                @foreach (App\Models\User::orderBy('name')->get() as $tool)
                                <option value="{{ $tool->id }}">{{ $tool->name }}</option>
                                @endforeach
                            </select>
                            @error('teacher') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="px-4 pb-5 bg-white">
                            <label for="type" class="block text-sm font-medium text-gray-700">{{ __('Type') }}</label>
                            <select id="type" wire:model="type" name="type" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="" hidden>{{ __('Select') }}</option>
                                <option value="hibrid">{{ __('Hibrid') }}</option>
                                <option value="online">{{ __('On-Line') }}</option>
                                <option value="presential">{{ __('Presential') }}</option>
                            </select>
                            @error('type') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="px-4 pb-5 bg-white">
                            <label for="church" class="block text-sm font-medium text-gray-700">{{ __('Church') }}</label>
                            <select id="church" wire:model="church" name="church" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="" hidden>{{ __('Select') }}</option>
                                @foreach (App\Models\Church::orderBy('name')->get() as $church)
                                <option value="{{ $church->id }}">{{ $church->name }}</option>
                                @endforeach
                            </select>
                            @error('church') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="px-4 pb-5 bg-white">
                            <label for="url" class="block text-sm font-medium text-gray-700">{{ __('URL') }}</label>
                            <input type="url" wire:model="url" name="url" id="url" placeholder="{{ __('URL') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('url') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="px-4 pb-5 bg-white">
                            <label for="date" class="block text-sm font-medium text-gray-700">{{ __('Date') }}</label>
                            <input type="date" wire:model="date" name="date" id="date" placeholder="{{ __('Date') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('date') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                        </div>

                        <div class="px-4 py-3 bg-gray-600 text-right sm:px-6">
                            <x-button-submit />
                            <x-button-viewer href="{{ route('office.trainings.view',$cod) }}" />
                        </div>
                    </form>
                </div>
                </div>
          </div>
        </x-slot>
    </x-section>
</div>
