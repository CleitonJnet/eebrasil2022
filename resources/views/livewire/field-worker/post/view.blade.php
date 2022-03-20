<div  class="pb-12">
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ $post->subject }}
        </h2>
    </x-slot>

    <x-navigation>
        <x-slot name="navigation">
            <x-nav-link href="{{ route('fieldworker.posts.index') }}">
                {{ __('INDEX') }}
            </x-nav-link>
            <x-nav-link href="{{ route('fieldworker.posts.edit',$post->id) }}">
                {{ __('EDIT') }}
            </x-nav-link>
        </x-slot>
    </x-navigation>

    <x-section>
        <x-slot name="section_title">
            <h3 class="text-lg leading-6 font-medium text-gray-900">{{ date('d-m-Y',strtotime($post->date)) }}</h3>
            <p class="mt-1 max-w-2xl font-bold text-sm {{ ($post->status == 1)? 'text-blue-700': 'text-yellow-600' }}">{{ ($post->status == 1)? 'Show': 'Hidden' }}</p>
        </x-slot>
        <x-slot name="section_body">
            <dl>
                <div class="bg-white rounded px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm text-gray-500 sm:col-span-3 font-semibold uppercase">{{ __('Your Text')}}:
                        @if ($post->moderate == 0) <span class="ml-2 text-red-800 italic font-light bg-red-200 px-2 rounded text-sm lowercase"> {{ __('Consult the moderator') }}</span> @endif
                    </dt>
                    <dd class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-3">{!! $post->text !!}</dd>
                </div>
            </dl>
        </x-slot>
    </x-section>

    @include('components.modal-delete-show')
</div>
