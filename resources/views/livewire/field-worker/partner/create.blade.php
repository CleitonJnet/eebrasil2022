<div  class="pb-12">
    <x-slot name="header"><h2 class="text-xl text-gray-800 leading-tight">{{ __('New Partner') }}</h2></x-slot>

    <x-section>
        <x-slot name="section_body">
            <div class="md:grid md:grid-cols-8 md:gap-6">
                <div class="md:col-span-2">
                  <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900 text-right">{{ __("Personal Information") }}</h3>
                    <p class="mt-1 text-sm text-gray-500 text-right">{{ __("Use your primary email, as in the future it may be used to receive subscriptions.") }}</p>
                  </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-6">
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <form wire:submit.prevent="partnerCreate">
                        <div class="px-4 py-5 bg-white sm:p-6 grid grid-cols-12 gap-4">
                            <div class="col-span-9 sm:col-span-9">
                                <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                                <input type="text" wire:model="name" id="name" placeholder="{{ __('Name') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('name') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>

                            <div class="col-span-9 sm:col-span-3">
                                <label for="birth" class="block text-sm font-medium text-gray-700">{{ __('Birth') }}</label>
                                <input type="date" minlength="10" maxlength="11" size="11" wire:model="birth" id="birth" placeholder="{{ __('Birth') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('birth') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="gender" class="block text-sm font-medium text-gray-700">{{ __('Gender') }}</label>
                                <select id="gender" wire:model="gender" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="" hidden>{{ __('Select') }}</option>
                                    <option value="M">{{ __('Man') }}</option>
                                    <option value="W">{{ __('Woman') }}</option>
                                </select>
                                @error('gender') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-6">
                                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                                <input type="text" wire:model="email" id="email" placeholder="{{ __('Email') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('email') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="phone" class="block text-sm font-medium text-gray-700">{{ __('Phone') }}</label>
                                <input type="text" minlength="10" maxlength="11" size="11" wire:model="phone" id="phone" placeholder="{{ __('Phone') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('phone') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="zipcode" class="block text-sm font-medium text-gray-700">{{ __('Postal code') }}</label>
                                <input type="number" wire:model="zipcode" id="zipcode" placeholder="{{ __('ZIP / Postal code') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('zipcode') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>

                            <div class="col-span-5 sm:col-span-6">
                                <label for="street" class="block text-sm font-medium text-gray-700">{{ __('Street') }}</label>
                                <input type="text" wire:model="street" id="street" placeholder="{{ __('Street') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('street') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-1 sm:col-span-3">
                                <label for="number" class="block text-sm font-medium text-gray-700">{{ __('Number') }}</label>
                                <input type="text" wire:model="number" id="number" placeholder="{{ __('Number') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('number') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-4 sm:col-span-3">
                                <label for="complement" class="block text-sm font-medium text-gray-700">{{ __('Complement') }}</label>
                                <input type="text" wire:model="complement" id="complement" placeholder="{{ __('Complement') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('complement') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-4 sm:col-span-3">
                                <label for="neighborhood" class="block text-sm font-medium text-gray-700">{{ __('Neighborhood') }}</label>
                                <input type="text" wire:model="neighborhood" id="neighborhood" placeholder="{{ __('Neighborhood') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('neighborhood') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-3 sm:col-span-4">
                                <label for="city" class="block text-sm font-medium text-gray-700">{{ __('City') }}</label>
                                <input type="text" wire:model="city" id="city" placeholder="{{ __('City') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('city') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                            <div class="col-span-1 sm:col-span-2">
                                <label for="state" class="block text-sm font-medium text-gray-700">{{ __('State') }}</label>
                                <select id="state" wire:model="state" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="" hidden>{{ __('Select') }}</option>
                                    <x-options-states />
                                </select>
                                @error('state') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>

                            <x-separate-form />

                            <div class="col-span-6 sm:col-span-3">
                                <label for="status" class="block text-sm font-medium text-gray-700">{{ __('Status') }}</label>
                                <select id="status" wire:model="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="" hidden>{{ __('Select') }}</option>
                                    <x-status-partner />
                                </select>
                                @error('status') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                              </div>

                              <div class="col-span-6 sm:col-span-3">
                                <label for="value" class="block text-sm font-medium text-gray-700">{{ __('Value') }}</label>
                                <input type="text" wire:model="value" id="value" placeholder="{{ __('Value') }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('value') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                              </div>

                              <div class="col-span-6 sm:col-span-3">
                                <label for="period" class="block text-sm font-medium text-gray-700">{{ __('Period') }}</label>
                                <select id="period" wire:model="period" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                  <option value="" hidden>{{ __('Select') }}</option>
                                  <option value="Unique">{{ __('Unique') }}</option>
                                  <option value="Monthly">{{ __('Monthly') }}</option>
                                  <option value="Yearly">{{ __('Yearly') }}</option>
                                </select>
                                @error('period') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                              </div>

                              <div class="col-span-9 sm:col-span-3">
                                <label for="since" class="block text-sm font-medium text-gray-700">{{ __('Since') }}</label>
                                <input type="date" minlength="10" maxlength="11" size="11" wire:model="since" id="since" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('birth') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                              </div>

                            <x-separate-form />

                            <div class="col-span-full">
                                <label for="comment" class="block text-sm font-medium text-gray-700">{{ __('Comments') }}</label>
                                <textarea wire:model="comment" id="comment" rows="5" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                                @error('comment') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                            </div>
                        </div>

                        <div class="px-4 py-3 bg-gray-600 text-right sm:px-6">
                            <x-button-submit />
                            <x-button-index href="{{ route('fieldworker.partners.index') }}" />
                        </div>

                    </form>
                  </div>
                </div>
              </div>
        </x-slot>
    </x-section>
</div>
