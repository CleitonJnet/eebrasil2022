<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}

        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
            <!-- Profile Photo File Input -->
            <input type="file" class="hidden"
                        wire:model.defer="state.photo"
                        x-ref="photo"
                        x-on:change="
                                photoName = $refs.photo.files[0].name;
                                const reader = new FileReader();
                                reader.onload = (e) => {
                                    photoPreview = e.target.result;
                                };
                                reader.readAsDataURL($refs.photo.files[0]);
                        " />

            <!-- Current Profile Photo -->
            <div class="mt-4" x-show="! photoPreview">
                <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="w-full rounded shadow object-cover">
            </div>

            <!-- New Profile Photo Preview -->
            <div class="mt-2" x-show="photoPreview" style="display: none;">
                <span class="block rounded w-full h-80 bg-cover bg-no-repeat bg-center"
                      x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                </span>
            </div>

            <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                {{ __('Select A New Photo') }}
            </x-jet-secondary-button>

            @if ($this->user->profile_photo_path)
                <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                    {{ __('Remove Photo') }}
                </x-jet-secondary-button>
            @endif

            <x-jet-input-error for="photo" class="mt-2" />
        </div>
        @endif

    </x-slot>

    <x-slot name="form">

        <div class="col-span-6 sm:col-span63">
            <label for="church_id" class="block text-sm font-medium text-gray-700">{{ __('Church') }}</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <select id="church_id" wire:model.defer="state.church_id" name="church_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" hidden>{{ __('Select') }}</option>
                    @foreach (App\Models\Church::orderBy('name')->get() as $church)
                      <option value="{{ $church->id }}">{{ $church->name }}</option>
                    @endforeach
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center">
                    <a href="{{ route('office.churches.create') }}" id="currency" name="currency" type="button" class="focus:ring-indigo-500 focus:border-indigo-500 py-2 px-4 border-gray-400 bg-gray-200 hover:bg-gray-400 text-gray-700 sm:text-sm rounded-r">Nova</a>
                </div>
              </div>
            @error('state') <span class="text-sm text-red-600">{{$message}}</span> @enderror
        </div>

        <div class="col-span-6 sm:col-span-4">
            <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
            <input type="text" wire:model.defer="state.name" name="name" id="name" placeholder="{{ __('Name') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('name') <span class="text-sm text-red-600">{{$message}}</span> @enderror
        </div>

        <div class="col-span-6 sm:col-span-2">
            <label for="birth" class="block text-sm font-medium text-gray-700">{{ __('Birth') }}</label>
            <input type="date" minlength="10" maxlength="11" size="11" wire:model.defer="state.birth" name="birth" id="birth" placeholder="{{ __('Birth') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('birth') <span class="text-sm text-red-600">{{$message}}</span> @enderror
        </div>
        <div class="col-span-6 sm:col-span-1">
            <label for="gender" class="block text-sm font-medium text-gray-700">{{ __('Gender') }}</label>
            <select id="gender" wire:model.defer="state.gender" name="gender" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="" hidden>{{ __('Select') }}</option>
                <option value="M">{{ __('Man') }}</option>
                <option value="W">{{ __('Woman') }}</option>
            </select>
            @error('gender') <span class="text-sm text-red-600">{{$message}}</span> @enderror
        </div>

        <div class="col-span-6 sm:col-span-3">
            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
            <input type="text" wire:model.defer="state.email" name="email" id="email" placeholder="{{ __('Email') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('email') <span class="text-sm text-red-600">{{$message}}</span> @enderror
        </div>
        <div class="col-span-6 sm:col-span-2">
            <label for="phone" class="block text-sm font-medium text-gray-700">{{ __('Phone') }}</label>
            <input type="text" minlength="10" maxlength="11" size="11" wire:model.defer="state.phone" name="phone" id="phone" placeholder="{{ __('Phone') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('phone') <span class="text-sm text-red-600">{{$message}}</span> @enderror
        </div>
        <div class="col-span-6 sm:col-span-2">
            <label for="zipcode" class="block text-sm font-medium text-gray-700">{{ __('Postal code') }}</label>
            <input type="number" wire:model.defer="state.zipcode" name="zipcode" id="zipcode" placeholder="{{ __('ZIP / Postal code') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('zipcode') <span class="text-sm text-red-600">{{$message}}</span> @enderror
        </div>

        <div class="col-span-5 sm:col-span-4">
            <label for="street" class="block text-sm font-medium text-gray-700">{{ __('Street') }}</label>
            <input type="text" wire:model.defer="state.street" name="street" id="street" placeholder="{{ __('Street') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('street') <span class="text-sm text-red-600">{{$message}}</span> @enderror
        </div>
        <div class="col-span-1 sm:col-span-2">
            <label for="number" class="block text-sm font-medium text-gray-700">{{ __('Number') }}</label>
            <input type="text" wire:model.defer="state.number" name="number" id="number" placeholder="{{ __('Number') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('number') <span class="text-sm text-red-600">{{$message}}</span> @enderror
        </div>
        <div class="col-span-4 sm:col-span-2">
            <label for="complement" class="block text-sm font-medium text-gray-700">{{ __('Complement') }}</label>
            <input type="text" wire:model.defer="state.complement" name="complement" id="complement" placeholder="{{ __('Complement') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('complement') <span class="text-sm text-red-600">{{$message}}</span> @enderror
        </div>
        <div class="col-span-4 sm:col-span-2">
            <label for="neighborhood" class="block text-sm font-medium text-gray-700">{{ __('Neighborhood') }}</label>
            <input type="text" wire:model.defer="state.neighborhood" name="neighborhood" id="neighborhood" placeholder="{{ __('Neighborhood') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('neighborhood') <span class="text-sm text-red-600">{{$message}}</span> @enderror
        </div>
        <div class="col-span-3 sm:col-span-2">
            <label for="city" class="block text-sm font-medium text-gray-700">{{ __('City') }}</label>
            <input type="text" wire:model.defer="state.city" name="city" id="city" placeholder="{{ __('City') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('city') <span class="text-sm text-red-600">{{$message}}</span> @enderror
        </div>
        <div class="col-span-1 sm:col-span-1">
            <label for="state" class="block text-sm font-medium text-gray-700">{{ __('State') }}</label>
            <select id="state" wire:model.defer="state.state" name="state" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="" hidden>{{ __('Select') }}</option>
                <x-options-states />
            </select>
            @error('state') <span class="text-sm text-red-600">{{$message}}</span> @enderror
        </div>

        <x-separate-form />

        <div class="col-span-6 sm:col-span-6">
            <label for="contact_email" class="block text-sm font-medium text-gray-700">{{ __('Comments') }}</label>
            <textarea wire:model.defer="state.comment" name="comment" id="comment" rows="5" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
            @error('comment') <span class="text-sm text-red-600">{{$message}}</span> @enderror
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="enable" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
