<div>
<style>
    p {padding-bottom: 15px}
</style>
    <x-slot name="header">
        <h2 class="text-xl leading-tight">
            <span class="text-gray-800 font-bold">{{ __('YOUR POST') }}</span>
        </h2>
    </x-slot>

    <x-slot name="navigation">
        <x-nav-link href="{{ route('fieldworker.posts.index') }}">
            {{ __('INDEX') }}
        </x-nav-link>
        <x-nav-link href="{{ route('fieldworker.posts.edit',$post->id) }}">
            {{ __('EDIT') }}
        </x-nav-link>
        <x-nav-link target="_blanc" href="{{ route('makePDF',$post->id) }}">
            {{ __('PDF') }}
        </x-nav-link>
    </x-slot>

    <x-section>
        <x-slot name="section_title">
            <h3 class="text-lg font-bold text-gray-900 ">{{ __('STATUS: ') }} @if ( $post->status == 1) <span class="text-blue-700">{{ __('Show') }}</span> @else <span class="text-red-700">{{ __('Hidden') }}</span> @endif </h3>
            <div class="font-bold text-sm">
                <span >{{ __('MODERATE: ') }}</span>
                @if ( $post->moderate == 1)
                    <span class="text-green-700">{{ __('Free') }}</span>
                @else
                    <span class="text-red-700">{{ __('Contact the moderator') }}</span>
                @endif
        </div>
        </x-slot>
        <x-slot name="section_body">
            <div class="bg-white p-10">
                <div class="pt-10">

                    <div class="flex items-center justify-center">
                        <img src="{{ asset('img/logo.png') }}" width="70" alt="">
                        <div class="text-gray-900 ml-2">
                            <div class="uppercase font-extrabold" style="font-size: 18px; font-family:'Times New Roman', Times, serif; letter-spacing: 1.7px"><span class="text-sky-900">{{ __('Evangelismo ') }}</span><span>{{ __('Explosivo') }}</span></div>
                            <div class="uppercase" style="font-size: 21px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; letter-spacing: .3px"><span>{{ __('Internacional ') }}</span><span class="text-sky-900">{{ __('no Brasil') }}</span></div>
                        </div>
                    </div>
                    <div class="text-left py-10">
                        <div class=" text-sm uppercase border-l-4 pl-2 border-blue-800"><span class="font-bold">{{ __('FIELDWORKER: ') }}</span>{{ Auth()->user()->name }}</div>
                        <div class=" text-sm uppercase border-l-4 pl-2 border-blue-800"><span class="font-bold">{{ __('SUBJECT: ') }}</span>{{ $post->subject }}</div>
                        <div class=" text-sm uppercase border-l-4 pl-2 border-blue-800"><span class="font-bold">{{ __('DATE: ') }}</span>{{ $post->date }}</div>
                    </div>
                </div>

                <hr class="border-sky-700">

                <div class="pt-10">{!! $post->text !!}</div>
            </div>
        </x-slot>
    </x-section>
</div>
