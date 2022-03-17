<div  class="pb-12">
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('Partner') }}
        </h2>
    </x-slot>

    <x-navigation>
        <x-slot name="navigation">
            <x-nav-link href="{{ route('fieldworker.partners.index') }}">
                {{ __('PARTNERS LIST') }}
            </x-nav-link>
            <x-nav-link href="{{ route('fieldworker.partners.edit',$partner->id) }}">
                {{ __('EDIT PARTNER') }}
            </x-nav-link>
        </x-slot>
    </x-navigation>

    <x-section>
        <x-slot name="section_body">
            <div class="md:grid grid-cols-6 gap-2">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg col-span-3">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 uppercase">{{ $partner->name }}</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ __('Personal Informations')}}</p>
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-3">{{ __('Birthday')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-9">{{ date('d-m-Y',strtotime($partner->birth)) }}</dd>
                            </div>
                            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-3">{{ __('Phone')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-9">{{ "(".substr($partner->phone, 0, 2).") ".substr($partner->phone, 2, 5)." ".substr($partner->phone,7) }}</dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-3">{{ __('Email')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-9">{{ $partner->email }}</dd>
                            </div>
                            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-3">{{ __('Address')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-9">{{ $partner->street }}{{ ($partner->number)?', '.$partner->number:'' }}{{ ($partner->complement)?', '.$partner->complement:'' }}{{ ($partner->neighborhood)?', '.$partner->neighborhood:'' }}{{ ($partner->city)?', '.$partner->city:'' }}{{ ($partner->state)?', '.$partner->state:'' }}{{ ($partner->zipcode)?' - '.$partner->zipcode:'' }}</dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="bg-white shadow overflow-hidden sm:rounded-lg col-span-3">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">{{__('Partnership') }}</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ __('Details')}}</p>
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-3">{{ __('Status')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-9 uppercase">
                                    @switch($partner->status)
                                        @case("Active")
                                        <span class="text-green-500 font-extrabold">Active</span>
                                        @break

                                        @case("Inactive")
                                        <span class="text-red-600 font-bold">Inactive</span>
                                        @break

                                        @default

                                    @endswitch
                                </dd>
                            </div>
                            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-3">{{ __('Value')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-9">$ {{ number_format($partner->value,2,',','.') }}</dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-3">{{ __('Period')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-9">{{ $partner->period }}</dd>
                            </div>
                            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-12 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-3">{{ __('Partner Since')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-9">{{ date('d-m-Y',strtotime($partner->since)) }}</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>

        </x-slot>
    </x-section>

    <x-section>
        <x-slot name="section_body">
            <dl>
                <div class="bg-white rounded px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500 sm:col-span-3 uppercase">{{ __('Comment')}}:</dt>
                    <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-3">{{ $partner->comment }}</dd>
                </div>
            </dl>
        </x-slot>
    </x-section>

    @include('components.modal-delete-show')
</div>
