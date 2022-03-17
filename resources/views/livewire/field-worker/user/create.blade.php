<div  class="pb-12">
    <x-slot name="header"><h2 class="text-xl text-gray-800 leading-tight">{{ __('New User') }}</h2></x-slot>

    <x-section>
        <x-slot name="section_title">
            <h3 class="text-lg leading-6 font-medium text-gray-900">{{ __('User Information')}}</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ __('Details')}}</p>
        </x-slot>
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
                    <form wire:submit.prevent="userStore">
                      <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-4">
                          <div class="col-span-6 sm:col-span-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                            <input type="text" wire:model="name" name="name" id="name" placeholder="{{ __('Name') }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('name') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                          </div>
                          <div class="col-span-6 sm:col-span-2">
                            <label for="phone" class="block text-sm font-medium text-gray-700">{{ __('Phone') }}</label>
                            <input type="text" wire:model="phone" name="phone" id="phone" placeholder="{{ __('Phone') }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('phone') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                          </div>
                          <div class="col-span-6 sm:col-span-2">
                            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                            <input type="email" wire:model="email" name="church_email" id="email" placeholder="{{ __('Email') }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('email') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                          </div>
                          <div class="col-span-6 sm:col-span-1">
                            <label for="zipcode" class="block text-sm font-medium text-gray-700">{{ __('Postal code') }}</label>
                            <input type="text" wire:model="zipcode" name="zipcode" id="zipcode" placeholder="{{ __('Postal code') }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('zipcode') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                            <label for="street" class="block text-sm font-medium text-gray-700">{{ __('Street') }}</label>
                            <input type="text" wire:model="street" name="street" id="street" placeholder="{{ __('Street') }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('street') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                          </div>
                          <div class="col-span-6 sm:col-span-1">
                            <label for="number" class="block text-sm font-medium text-gray-700">{{ __('Number') }}</label>
                            <input type="text" wire:model="number" name="number" id="number" placeholder="{{ __('Number') }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('number') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                            <label for="complemet" class="block text-sm font-medium text-gray-700">{{ __('Complement') }}</label>
                            <input type="text" wire:model="complement" name="complemet" id="complemet" placeholder="{{ __('Complement') }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('complemet') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                          </div>
                          <div class="col-span-6 sm:col-span-2">
                            <label for="neighborhood" class="block text-sm font-medium text-gray-700">{{ __('Neighborhood') }}</label>
                            <input type="text" wire:model="neighborhood" name="neighborhood" id="neighborhood" placeholder="{{ __('Neighborhood') }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('neighborhood') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                          </div>
                          <div class="col-span-6 sm:col-span-2">
                            <label for="city" class="block text-sm font-medium text-gray-700">{{ __('City') }}</label>
                            <input type="text" wire:model="city" name="city" id="city" placeholder="{{ __('City') }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('city') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                          </div>
                          <div class="col-span-6 sm:col-span-1">
                            <label for="state" class="block text-sm font-medium text-gray-700">{{ __('State') }}</label>
                            <select id="state" wire:model="state" name="state" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                              <option value="" hidden>{{ __('Select') }}</option>
                              <x-options-states />
                            </select>
                            @error('state') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                              <label for="church_id" class="block text-sm font-medium text-gray-700">{{ __('Church') }}</label>
                              <div class="mt-1 relative rounded-md shadow-sm">
                                  <select id="church_id" wire:model="church_id" name="church_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                      <option value="" hidden>{{ __('Select') }}</option>
                                      @foreach ($churches as $church)
                                        <option value="{{ $church->id }}">{{ $church->name }}</option>
                                      @endforeach
                                  </select>
                                  <div class="absolute inset-y-0 right-0 flex items-center">
                                      <a href="{{ route('fieldworker.churches.create') }}" id="currency" name="currency" type="button" class="focus:ring-indigo-500 focus:border-indigo-500 py-2 px-4 border-gray-400 bg-gray-200 hover:bg-gray-400 text-gray-700 sm:text-sm rounded-r">Nova</a>
                                  </div>
                                </div>
                              @error('state') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                          </div>

                        </div>

                      </div>
                      <div class="px-4 py-3 bg-gray-600 text-right sm:px-6">
                        <x-button-submit />
                        <x-button-index href="{{ route('fieldworker.users.index') }}" />
                    </div>

                    </form>
                  </div>
                </div>
              </div>
        </x-slot>
    </x-section>
</div>
