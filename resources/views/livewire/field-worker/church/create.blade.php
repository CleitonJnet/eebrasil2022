<div>
    <x-slot name="header"><h2 class="text-xl text-gray-800 leading-tight">{{ __('New Church') }}</h2></x-slot>

    <x-section>
        <x-slot name="section_body">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                <div class="px-4 sm:px-0 text-center md:text-right pt-6">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">{{ __("Church's Information") }}</h3>
                    <p class="mt-1 text-sm text-gray-500">{{ __("Use your primary email, as in the future it may be used to receive subscriptions.") }}</p>
                </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow-md overflow-hidden sm:rounded-md">
                    <form wire:submit.prevent="churchStore">
                        <div class="px-4 py-5 bg-white sm:p-6 grid grid-cols-6 gap-4">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Church name') }}</label>
                                <input type="text" wire:model="name" name="name" id="name" placeholder="{{ __('Church name') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('name') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="pastor" class="block text-sm font-medium text-gray-700">{{ __('Pastor') }}</label>
                                <input type="text" wire:model="pastor" name="pastor" id="pastor" placeholder="{{ __('Pastor') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('pastor') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="phone" class="block text-sm font-medium text-gray-700">{{ __('Phone') }}</label>
                                <input type="text" minlength="10" maxlength="11" size="11" wire:model="phone" name="phone" id="phone" placeholder="{{ __('Phone') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('phone') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                                <input type="text" wire:model="email" name="email" id="email" placeholder="{{ __('Email') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('email') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-5 sm:col-span-3">
                                <label for="street" class="block text-sm font-medium text-gray-700">{{ __('Street') }}</label>
                                <input type="text" wire:model="street" name="street" id="street" placeholder="{{ __('Street') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('street') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-1 sm:col-span-1">
                                <label for="number" class="block text-sm font-medium text-gray-700">{{ __('Number') }}</label>
                                <input type="text" wire:model="number" name="number" id="number" placeholder="{{ __('Number') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('number') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-4 sm:col-span-2">
                                <label for="complement" class="block text-sm font-medium text-gray-700">{{ __('Complement') }}</label>
                                <input type="text" wire:model="complement" name="complement" id="complement" placeholder="{{ __('Complement') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('complement') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-4 sm:col-span-3">
                                <label for="neighborhood" class="block text-sm font-medium text-gray-700">{{ __('Neighborhood') }}</label>
                                <input type="text" wire:model="neighborhood" name="neighborhood" id="neighborhood" placeholder="{{ __('Neighborhood') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('neighborhood') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-3 sm:col-span-3">
                                <label for="city" class="block text-sm font-medium text-gray-700">{{ __('City') }}</label>
                                <input type="text" wire:model="city" name="city" id="city" placeholder="{{ __('City') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('city') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-1 sm:col-span-1">
                                <label for="state" class="block text-sm font-medium text-gray-700">{{ __('State') }}</label>
                                <select id="state" wire:model="state" name="state" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="" hidden>{{ __('Select') }}</option>
                                    <x-options-states />
                                </select>
                                @error('state') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label for="zipcode" class="block text-sm font-medium text-gray-700">{{ __('Postal code') }}</label>
                                <input type="number" wire:model="zipcode" name="zipcode" id="zipcode" placeholder="{{ __('Postal code') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('zipcode') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>

                            <x-separate-form />

                            <div class="col-span-6 sm:col-span-3">
                                <label for="contact" class="block text-sm font-medium text-gray-700">{{ __('Contact') }}</label>
                                <input type="text" wire:model="contact" name="contact" id="contact" placeholder="{{ __('Contact') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('contact') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="contact_phone" class="block text-sm font-medium text-gray-700">{{ __('Contact Phone') }}</label>
                                <input type="text" wire:model="contact_phone" name="contact_phone" id="contact_phone" placeholder="{{ __('Contact Phone') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('contact_phone') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="contact_email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                                <input type="email" wire:model="contact_email" name="contact_email" id="contact_email" placeholder="{{ __('Email Address') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('contact_email') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>

                            <x-separate-form />

                            <div class="col-span-6 sm:col-span-6">
                                <label for="contact_email" class="block text-sm font-medium text-gray-700">{{ __('Comments') }}</label>
                                <textarea wire:model="comment" name="comment" id="comment" rows="5" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                                @error('comment') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-600 text-right sm:px-6">
                            <x-button-submit />
                            <x-button-index href="{{ route('fieldworker.churches.index') }}" />
                        </div>
                    </form>
                </div>
                </div>
          </div>
        </x-slot>
    </x-section>
</div>
