<div>
    <x-slot name="header"><h2 class="text-xl text-gray-800 leading-tight">{{ __('New Tool') }}</h2></x-slot>

    <x-section>
        <x-slot name="section_body">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                <div class="px-4 sm:px-0 text-center md:text-right pt-6">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">{{ __("Category") }}: {{ $category->name }}</h3>
                    <p class="mt-1 text-sm text-gray-500">{{ __("Tool's Information.") }}</p>
                </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow-md overflow-hidden sm:rounded-md">
                    <form wire:submit.prevent="toolCreate">
                        <div class="px-4 py-5 bg-white sm:p-6 grid grid-cols-6 gap-4">
                            <div class="col-span-full">
                                <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                                <input type="text" wire:model="name" name="name" id="name" placeholder="{{ __('Name') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('name') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>

                            <div class="col-span-full">
                                <label for="contact_email" class="block text-sm font-medium text-gray-700">{{ __('Description') }}</label>
                                <textarea wire:model="description" id="description" rows="5" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                                @error('description') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>

                            <div class="col-span-full">
                                <label for="knowhow" class="block text-sm font-medium text-gray-700">{{ __('Know How') }}</label>
                                <textarea wire:model="knowhow" id="knowhow" rows="5" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                                @error('knowhow') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-600 text-right sm:px-6">
                            <x-button-submit />
                            <x-button-index href="{{ route('office.categories.index') }}" />
                        </div>
                    </form>
                </div>
                </div>
          </div>
        </x-slot>
    </x-section>
</div>
