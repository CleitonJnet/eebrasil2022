<div  class="pb-12">
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('View') }}
        </h2>
    </x-slot>

    <x-navigation>
        <x-slot name="navigation">
            <x-nav-link href="{{ route('fieldworker.users.edit',$user->id) }}">
                {{ __('EDIT USER') }}
            </x-nav-link>
        </x-slot>
    </x-navigation>

    <x-section>
        <x-slot name="section_body">
            <div class="md:grid grid-cols-5 gap-2">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg col-span-3">
                    <div class="flex place-content-between">
                        <div class="px-4 py-5 sm:px-6 flex items-center">

                            <div class="pl-4">
                                <h3 class="text-lg leading-6 font-medium text-gray-900 uppercase">{{ $user->name }}</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ __('Personal Information')}}</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center">
                            <button type="button" onclick="showResetPassword()" href="#" class="mx-6 px-8 py-2 border rounded bg-slate-900 text-white hover:bg-slate-800">{{ __('Password  Reset')}}</button>
                        </div>
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="sm:grid sm:grid-cols-10">
                                <div class="sm:grid sm:grid-cols-12 sm:gap-4 sm:col-span-4 row-span-5 px-4 py-5 sm:px-6 bg-cover bg-center bg-no-repeat" style="background-image: url({{ $user->profile_photo_url }})"></div>
                                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-12 sm:gap-4 sm:col-span-6 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500 sm:col-span-3">{{ __('Birthday')}}:</dt>
                                    <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-9">{{ date('d-m-Y', strtotime($user->birth)) }}</dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-12 sm:gap-4 sm:col-span-6 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500 sm:col-span-3">{{ __('Gender')}}:</dt>
                                    <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-9">{{ ($user->gender === 'M')? __('Man') : __('Woman') }}</dd>
                                </div>
                                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-12 sm:gap-4 sm:col-span-6 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500 sm:col-span-3">{{ __('Phone')}}:</dt>
                                    <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-9">{{ "(".substr($user->phone, 0, 2).") ".substr($user->phone, 2, 5)." ".substr($user->phone,7) }}</dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-12 sm:gap-4 sm:col-span-6 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500 sm:col-span-3">{{ __('Email')}}:</dt>
                                    <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-9">{{ $user->email }}</dd>
                                </div>
                            </div>
                            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-12 sm:gap-4 sm:col-span-6 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500 sm:col-span-2 flex items-center">{{ __('Address')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-10 flex items-center">{{ $user->street }}{{ ($user->number)?', '.$user->number:'' }}{{ ($user->complement)?', '.$user->complement:'' }}{{ ($user->neighborhood)?', '.$user->neighborhood:'' }}{{ ($user->city)?', '.$user->city:'' }}{{ ($user->state)?', '.$user->state:'' }}{{ ($user->zipcode)?' - '.$user->zipcode:'' }}</dd>
                            </div>
                    </dl>
                    </div>
                </div>
                <div class="bg-white shadow overflow-hidden sm:rounded-lg col-span-2">
                    @if ($user->church_id !== null)
                    <div class="flex place-content-between">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 uppercase">{{ __('Church Information')}}</h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ __('Details')}}</p>
                        </div>

                        <div class="flex flex-col justify-center">
                            <a href="{{ route('fieldworker.churches.view', $user->church->id) }}" class="px-6 py-2 mr-6 border rounded bg-sky-700 text-white hover:bg-sky-900">{{ __('Viewer') }}</a>
                        </div>
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">{{ __('Church name')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{  $user->church->name }}</dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">{{ __('Pastor')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $user->church->pastor }}</dd>
                            </div>
                            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">{{ __('Contact')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $user->church->contact }}</dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">{{ __("Contact's Email")}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $user->church->email }}</dd>
                            </div>
                            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">{{ __("Contact's Phone")}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ "(".substr($user->church->phone, 0, 2).") ".substr($user->church->phone, 2, 5)." ".substr($user->church->phone,7) }}</dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">{{ __('Address')}}:</dt>
                                <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $user->church->street }}{{ ($user->church->number)?', '.$user->church->number:'' }}{{ ($user->church->complement)?', '.$user->church->complement:'' }}{{ ($user->church->neighborhood)?', '.$user->church->neighborhood:'' }}{{ ($user->church->city)?', '.$user->church->city:'' }}{{ ($user->church->state)?', '.$user->church->state:'' }}</dd>
                            </div>
                        </dl>
                    </div>
                    @else
                      <h4 class="text-center pt-5">{{ __('No records found') }}</h4>
                    @endif
                </div>
            </div>

        </x-slot>
    </x-section>

    <x-section>
        <x-slot name="section_body">
            <dl>
                <div class="bg-white rounded px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500 sm:col-span-3 uppercase">{{ __('Comment')}}:</dt>
                    <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-3">{{ $user->comment }}</dd>
                </div>
            </dl>
        </x-slot>
    </x-section>

    @if ($user->roles()->count() > 0)

    <x-section>
        <x-slot name="section_title">
            <h3 class="text-lg leading-6 font-medium text-gray-900">{{ __('Roles')}}</h3>
        </x-slot>
        <x-slot name="section_body">
            <x-table>
                <x-slot name="table_body">
                    @foreach ($user->roles()->orderBy('name')->get() as $role)
                    <tr class="hover:bg-sky-100">
                        <td class="px-6 py-2 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $role->name}}</div>
                        </td>
                    </tr>
                    @endforeach
                </x-slot>
            </x-table>
        </x-slot>
    </x-section>

    @endif

    @include('components.modal-delete-show')

</div>
