<div  class="pb-12">
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('View') }}
        </h2>
    </x-slot>

    <x-navigation>
        <x-slot name="navigation">
            <x-nav-link href="{{ route('fieldworker.churches.edit',$cod) }}">
                {{ __('EDIT CHURCH') }}
            </x-nav-link>
            <x-nav-link href="{{ route('fieldworker.churches.fieldworker',$cod) }}">
                {{ __('IMPLEMENTATION') }}
            </x-nav-link>
        </x-slot>
    </x-navigation>

    <x-section>
        <x-slot name="section_title">
            <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $name }}</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ __('Church Information')}}</p>
        </x-slot>

        <x-slot name="section_body">
            <div class="md:grid grid-cols-12 gap-2">
                <div class="col-span-7">
                    <dl>
                        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">{{ __('Pastor')}}:</dt>
                            <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $pastor }}</dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">{{ __('Phone')}}:</dt>
                            <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ "(".substr($phone, 0, 2).") ".substr($phone, 2, 5)." ".substr($phone,7) }}</dd>
                        </div>
                        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">{{ __('E-mail')}}:</dt>
                            <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $email }}</dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">{{ __('Address')}}:</dt>
                            <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $street }}{{ ($number)?', '.$number:'' }}{{ ($complement)?', '.$complement:'' }}{{ ($neighborhood)?', '.$neighborhood:'' }}{{ ($city)?', '.$city:'' }}{{ ($state)?', '.$state:'' }}{{ ($zipcode)?' - '.$zipcode:'' }}</dd>
                        </div>
                    </dl>
                </div>
                <dl class="col-span-5">
                    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('Contact')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $contact }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('Phone')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ "(".substr($contact_phone, 0, 2).") ".substr($contact_phone, 2, 5)." ".substr($contact_phone,7) }}</dd>
                    </div>
                    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('E-mail')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $contact_email }}</dd>
                    </div>
                </dl>
            </div>
    </x-slot>
    </x-section>

    <x-section>
        <x-slot name="section_body">
            <dl>
                <div class="bg-white rounded px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500 sm:col-span-3 uppercase">{{ __('Comment')}}:</dt>
                    <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-3">{{ $comment }}</dd>
                </div>
            </dl>
        </x-slot>
    </x-section>

    <x-section>
        <x-slot name="section">
            <x-slot name="section_title">
                <h3 class="text-lg leading-6 font-medium text-gray-900">{{ __('Members')}}</h3>
            </x-slot>

            <x-slot name="section_body">

                <x-input_search>
                    <x-slot name="optionSearch">
                        <option value="users.name">{{ __('Name') }}</option>
                        <option value="users.email">{{ __('Email') }}</option>
                        <option value="users.city">{{ __('City') }}</option>
                        <option value="users.state">{{ __('State') }}</option>
                    </x-slot>
                </x-input_search>

                @if ($users->count() > 0)
                <div class="pl-0 md:pl-4">{{ $users->links() }}</div>
                <x-table>
                    <x-slot name="table_head">
                        <x-table-th><x-slot name="thead_th">{{ __('Name') }}</x-slot></x-table-th>
                        <x-table-th><x-slot name="thead_th">{{ __('Email') }}</x-slot></x-table-th>
                        <x-table-th><x-slot name="thead_th">{{ __('Phone') }}</x-slot></x-table-th>
                    </x-slot>
                    <x-slot name="table_body">
                        @foreach ($users as $user)
                        <tr class="hover:bg-sky-50 cursor-pointer" onclick="window.location.replace('{{ route('office.users.view',$user->id) }}');">
                            <td class="px-6 py-1 whitespace-nowrap">
                                <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full">
                                    <img class="h-10 w-10 rounded-full" src="{{ asset('img/users/user.jpg') }}" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">{{ $user->email }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">{{ $user->phone }}</div>
                            </td>
                        </tr>
                        @endforeach
                    </x-slot>
                </x-table>
                <div class="pl-0 md:pl-4 mt-1">{{ $users->links() }}</div>
                @else
                <h4 class="text-center py-5">{{ __('No records found') }}</h4>
                @endif
            </x-slot>
        </x-slot>
    </x-section>

    @include('components.modal-delete-show')

</div>
