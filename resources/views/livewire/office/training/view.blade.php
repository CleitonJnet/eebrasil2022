<div>
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('Event') }}
        </h2>
    </x-slot>

    <x-slot name="navigation">
        <x-nav-link href="{{ route('office.trainings.index') }}">
            {{ __('INDEX') }}
        </x-nav-link>
        <x-nav-link href="{{ route('office.trainings.edit',$training->id) }}">
            {{ __('EDIT') }}
        </x-nav-link>
        <x-nav-link href="{{ route('office.trainings.report',$training->id) }}">
            {{ __('REPORT') }}
        </x-nav-link>
        <x-nav-link href="{{ route('office.schedules.index',$training->id) }}">
            {{ __('SCHEDULE') }}
        </x-nav-link>
    </x-slot>

    <x-section>
        <x-slot name="section_title">
            <h3 class="text-lg leading-6 font-medium text-gray-900">{{ __('Training') }}: {{ $training->tool->name }}</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ __('Details')}}</p>
        </x-slot>

        <x-slot name="section_body">

            <div class="md:grid grid-cols-2 gap-2">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('Teacher')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $training->user->name }}</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('Date')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ date('d-m-Y',strtotime($training->date)) }}</dd>
                    </div>
                </dl>
            </div>

        </x-slot>
    </x-section>

    <x-section>
        <x-slot name="section_title">
            <h3 class="text-lg leading-6 font-medium text-gray-900">{{ __('Type') }}: {{ $training->type }}</h3>
        </x-slot>

        <x-slot name="section_body">
            <div class="md:grid grid-cols-12 gap-2">
                <div class="col-span-7">
                    <dl>
                        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500 col-span-6 sm:col-span-2">{{ __('Pastor')}}:</dt>
                            <dd class="mt-1 text-sm text-gray-500 sm:mt-0 col-span-6 sm:col-span-5">{{ $training->church->pastor }}</dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-5500 col-span-600 sm:col-span-2">{{ __('Phone')}}:</dt>
                            <dd class="mt-1 text-sm text-gray-500 sm:mt-0 col-span-6 sm:col-span-5">{{ "(".substr($training->church->phone, 0, 2).") ".substr($training->church->phone, 2, 5)." ".substr($training->church->phone,7) }}</dd>
                        </div>
                        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500 col-span-6 sm:col-span-2">{{ __('E-mail')}}:</dt>
                            <dd class="mt-1 text-sm text-gray-500 sm:mt-0 col-span-6 sm:col-span-5">{{ $training->church->email }}</dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500 col-span-6 sm:col-span-2">{{ __('Address')}}:</dt>
                            <dd class="mt-1 text-sm text-gray-500 sm:mt-0 col-span-6 sm:col-span-5">{{ $training->church->street }}{{ ($training->church->number)?', '.$training->church->number:'' }}{{ ($training->church->complement)?', '.$training->church->complement:'' }}{{ ($training->church->neighborhood)?', '.$training->church->neighborhood:'' }}{{ ($training->church->city)?', '.$training->church->city:'' }}{{ ($training->church->state)?', '.$training->church->state:'' }}{{ ($training->church->zipcode)?' - '.$training->church->zipcode:'' }}</dd>
                        </div>
                    </dl>
                </div>
                <dl class="col-span-5">
                    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500 col-span-6 sm:col-span-2">{{ __('Contact')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 col-span-6 sm:col-span-4">{{ $training->church->contact }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500 col-span-6 sm:col-span-2">{{ __('Phone')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 col-span-6 sm:col-span-4">{{ "(".substr($training->church->contact_phone, 0, 2).") ".substr($training->church->contact_phone, 2, 5)." ".substr($training->church->contact_phone,7) }}</dd>
                    </div>
                    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500 col-span-6 sm:col-span-2">{{ __('E-mail')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 col-span-6 sm:col-span-4">{{ $training->church->contact_email }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500 col-span-6 sm:col-span-2">{{ __('URL')}}:</dt>
                        <dd class="mt-1 text-sm text-gray-500 sm:mt-0 col-span-6 sm:col-span-4">{{ $training->url }}</dd>
                    </div>
                </dl>
            </div>

        </x-slot>
    </x-section>

    <x-section>
        <x-slot name="section">
            <x-slot name="section_title">
                <h3 class="text-lg leading-6 font-medium text-gray-900">{{ __('Students')}}</h3>
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

                @if ($training->students->count() > 0)
                <div class="pl-0 md:pl-4">{{ $class->links() }}</div>
                <x-table>
                    <x-slot name="table_head">
                        <x-table-th><x-slot name="thead_th">{{ __('Name') }}</x-slot></x-table-th>
                        <x-table-th><x-slot name="thead_th">{{ __('Email') }}</x-slot></x-table-th>
                        <x-table-th><x-slot name="thead_th">{{ __('Phone') }}</x-slot></x-table-th>
                    </x-slot>
                    <x-slot name="table_body">
                        @foreach ($class as $student)
                        <tr class="hover:bg-sky-50 cursor-pointer" onclick="window.location.replace('{{ route('office.users.view',$student->id) }}');">
                            <td class="px-6 py-1 whitespace-nowrap">
                                <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full">
                                    <img class="h-10 w-10 rounded-full" src="{{ asset('img/users/user.jpg') }}" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">{{ $student->name }}</div>
                                </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">{{ $student->email }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap" style="width: 170px">
                                <div class="text-sm text-gray-500">{{ $student->phone }}</div>
                            </td>
                        </tr>
                        @endforeach
                    </x-slot>
                </x-table>
                <div class="pl-0 md:pl-4 mt-1">{{ $class->links() }}</div>
                @else
                <h4 class="text-center py-5">{{ __('No records found') }}</h4>
                @endif
            </x-slot>
        </x-slot>
    </x-section>

    <x-section>
        <x-slot name="section_body">
            <dl>
                <div class="bg-white rounded px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500 sm:col-span-3 uppercase">{{ __('Comment')}}:</dt>
                    <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-3">{{ $training->comment }}</dd>
                </div>
            </dl>
        </x-slot>
    </x-section>

    @include('components.modal-delete-show')
</div>
