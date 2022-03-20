<div>
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <x-slot name="navigation">
        <x-nav-link href="{{ route('fieldworker.posts.create') }}">
            {{ __('NEW POST') }}
        </x-nav-link>
    </x-slot>

    <x-section>
        <x-slot name="section_body">
            <div class="my-1 relative rounded-md shadow-sm">
                <input type="text" id="price" wire:model="search" wire:keydown.escape="search_clear()" style="padding-left: 2rem" autofocus class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Search">
            </div>

            @if ($posts->count() > 0)
            <div class="pl-0 md:pl-4">{{ $posts->links() }}</div>
            <x-table>
                <x-slot name="table_head">
                    <x-table-th> <x-slot name="thead_th">{{ __('Date') }} </x-slot></x-table-th>
                    <x-table-th> <x-slot name="thead_th">{{ __('Subject') }} </x-slot></x-table-th>
                    <x-table-th> <x-slot name="thead_th">{{ __('Status') }} </x-slot></x-table-th>
                    <x-table-th> <x-slot name="thead_th">{{ __('Moderate') }} </x-slot></x-table-th>
                </x-slot>
                <x-slot name="table_body">
                    @foreach ($posts as $post)
                    <tr class="hover:bg-indigo-50 cursor-pointer" onclick="window.location.replace('{{ route('fieldworker.posts.view',$post->id) }}');">
                        <td class="px-6 py-4 whitespace-nowrap" style="width: 200px">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-8 w-8">
                                    <a href="{{ route('fieldworker.posts.view',$post->id) }}">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 840.000000 859.000000" preserveAspectRatio="xMidYMid meet">
                                            <g transform="translate(0.000000,859.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                                <path d="M339 8551 c-68 -22 -108 -51 -148 -106 -66 -92 -61 246 -59 -4175 l3 -4015 22 -47 c34 -75 103 -134 181 -158 67 -20 84 -20 2972 -18 l2905 3 48 22 c62 29 127 98 151 159 18 44 20 82 24 367 2 176 1 330 -2 343 l-6 24 -293 -2 -292 -3 -5 -155 -5 -155 -2550 0 -2550 0 0 3665 0 3665 1964 3 c1565 2 1966 0 1973 -10 4 -7 8 -234 8 -503 0 -489 0 -491 23 -535 16 -33 34 -51 67 -67 44 -23 46 -23 545 -23 275 0 506 -4 512 -8 9 -6 13 -61 15 -197 l3 -190 115 -6 c130 -7 242 -28 379 -70 51 -16 95 -29 98 -29 2 0 3 192 1 428 -3 422 -3 428 -27 487 -22 57 -56 92 -590 621 -311 309 -590 582 -620 608 -30 25 -80 56 -110 68 l-56 23 -2320 2 c-2204 2 -2323 1 -2376 -16z"/>
                                                <path d="M5829 6008 c-341 -28 -614 -196 -811 -497 -84 -129 -137 -257 -164 -399 -19 -97 -18 -314 2 -427 30 -178 31 -162 -8 -203 -50 -52 -61 -79 -61 -143 0 -97 47 -156 156 -193 22 -7 31 -30 51 -137 67 -355 298 -672 592 -810 107 -51 188 -69 310 -69 227 0 437 97 607 280 165 178 272 390 313 620 9 52 22 100 28 106 6 6 32 19 59 28 59 22 94 66 109 139 16 74 0 124 -54 177 l-41 39 21 113 c43 220 38 395 -14 576 -99 342 -375 647 -679 750 -141 47 -267 63 -416 50z"/>
                                                <path d="M1563 5389 c-70 -20 -103 -102 -68 -169 33 -64 -41 -60 1246 -60 l1171 0 34 34 c29 29 34 40 34 83 -1 53 -10 70 -55 99 -28 18 -63 19 -1180 21 -683 1 -1163 -2 -1182 -8z"/>
                                                <path d="M1563 4319 c-47 -14 -83 -62 -83 -113 0 -23 7 -52 16 -64 38 -55 -23 -52 1234 -52 1275 0 1202 -4 1235 60 38 73 -1 155 -80 169 -60 11 -2285 11 -2322 0z"/>
                                                <path d="M1591 3251 c-43 -5 -59 -13 -82 -39 -53 -59 -33 -151 38 -181 21 -8 334 -11 1201 -9 l1174 3 29 33 c23 26 29 42 29 78 0 39 -5 51 -34 80 l-34 34 -1068 0 c-588 0 -1098 2 -1134 4 -36 3 -89 1 -119 -3z"/>
                                                <path d="M5065 2744 c-395 -108 -773 -287 -1098 -520 -185 -133 -398 -318 -416 -362 -9 -20 -11 -91 -9 -241 4 -255 -1 -245 130 -256 46 -3 1082 -5 2303 -3 1825 2 2224 5 2243 16 44 25 52 67 52 262 0 129 -4 190 -13 213 -16 36 -88 106 -239 229 -303 248 -618 430 -973 562 -172 64 -383 126 -427 126 -16 0 -60 -13 -96 -29 -386 -169 -828 -171 -1225 -7 -48 20 -100 36 -115 35 -15 0 -67 -12 -117 -25z"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-bold text-gray-900">{{ date('d-m-Y',strtotime($post->date)) }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-bold text-gray-900 flex items-center">
                                {{ $post->subject }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" style="width: 100px">
                            <div class="text-sm font-bold flex items-center justify-center {{ ($post->status == 1)? __('text-blue-700') : __('text-yellow-600') }}">
                                {{ ($post->status == 1)? __('Show') : __('Hidden') }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" style="width: 100px">
                            <div class="text-sm font-bold flex items-center justify-center {{ ($post->moderate == 1)? __('text-green-600') : __('text-red-600') }}">
                                {{ ($post->moderate == 1)? __('Free') : __('Restricted') }}
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </x-slot>
            </x-table>
            <div class="pl-0 md:pl-4 mt-1">{{ $posts->links() }}</div>
            @endif
        </x-slot>
    </x-section>
</div>
