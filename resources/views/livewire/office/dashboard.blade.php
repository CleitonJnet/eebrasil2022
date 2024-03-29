<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Office') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        {{ __('Available resources: ') }}
                    </div>

                    <div class="mt-6 text-gray-500 text-justify">
                        {{ __('You are gaining access to the Ministerial Management System module for the office. This one offers a great help for the main work routines. Here you will have access to the management of Inventory, Churches, and also, you can create new training.') }}
                    </div>
                </div>

                <div class="bg-gray-300 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 text-gray-500 hover:text-black transition">
                        <div class="flex items-center">
                            <svg fill="gray" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8 text-gray-400" x="0" y="0" viewBox="0 0 1000 1000" opacity="60%">
                                <g>
                                    <g>
                                        <polygon fill="#444444" points="726.7,704 726.7,990 930.7,990 930.7,821.9 "/>
                                        <polygon points="644.8,544.3 644.8,339.6 355.1,339.6 355.1,544.3 500,458.6 "/>
                                        <polygon fill="#444444" points="69.3,990 273.3,990 273.3,703.8 69.3,821.9 "/>
                                        <path d="M294.6,604.8v385.1h410.8V604.8L500,483.3L294.6,604.8z M490.8,974.3h-76.7V795.4h76.7V974.3L490.8,974.3z M585.9,974.3h-76.7V795.4h76.7V974.3z M589.5,711.3H410.5c0-49.4,40.1-89.5,89.5-89.5C549.4,621.8,589.5,661.9,589.5,711.3z"/>
                                        <polygon fill="#444444" points="386.1,319.4 613.9,319.4 510.7,126.6 510.7,64.3 553.3,64.3 553.3,43 510.7,43 510.7,10 489.3,10 489.3,43 446.7,43 446.7,64.3 489.3,64.3 489.3,126.6 "/>
                                    </g>
                                </g>
                            </svg>
                            <div class="ml-4 text-lg text-indigo-600 hover:text-indigo-900 leading-7 font-semibold transition"><a href="{{ route('office.churches.index') }}">{{ __('Church Management') }}</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-justify italic">
                                {{ __('In this session you will be able to manage all the churches that you have trained. Some churches may be directed to you through the office or another missionary. Here you can register, update information and delete churches from the database.') }}
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t text-gray-500 hover:text-black transition border-gray-300 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="gray" class="w-8 h-8 text-gray-400" stroke="currentColor" opacity="60%" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                    <path class="fill-gray-700" d="M750 5104 c-30 -8 -91 -32 -135 -54 -140 -69 -236 -165 -305 -305 -52 -106 -70 -179 -70 -292 0 -80 3 -96 20 -113 11 -11 29 -20 40 -20 19 0 20 -7 20 -131 0 -150 14 -217 65 -319 45 -89 111 -168 190 -226 60 -44 65 -51 65 -85 l0 -37 -177 -4 c-174 -3 -180 -4 -238 -32 -77 -38 -153 -114 -191 -191 l-29 -60 -3 -317 c-3 -308 -2 -318 17 -337 28 -28 94 -28 121 -1 19 19 20 33 20 296 0 188 4 290 12 318 16 55 99 138 154 154 25 7 104 12 199 12 l158 0 43 -40 c54 -50 74 -50 164 -5 l70 35 70 -35 c90 -45 110 -45 163 5 l43 39 385 3 384 3 50 25 c104 51 169 147 184 268 6 50 13 70 31 84 54 43 130 3 130 -69 -1 -167 -112 -344 -264 -418 -99 -49 -146 -55 -413 -55 l-234 0 -24 -25 -25 -24 0 -276 c0 -262 1 -276 20 -295 13 -13 33 -20 60 -20 27 0 47 7 60 20 19 19 20 33 20 240 l0 220 80 0 80 0 0 -220 c0 -207 1 -221 20 -240 20 -20 33 -20 1660 -20 1627 0 1640 0 1660 20 20 20 20 33 20 1260 0 1227 0 1240 -20 1260 -20 20 -33 20 -1660 20 -1627 0 -1640 0 -1660 -20 -20 -20 -20 -33 -20 -800 l0 -780 -217 0 c-120 0 -228 3 -240 6 -18 5 -23 14 -23 38 0 27 9 38 62 76 115 84 211 227 243 362 21 90 21 520 0 603 -34 134 -124 277 -230 365 -61 50 -189 115 -270 135 -75 19 -261 19 -335 -1z m266 -155 c61 -11 182 -65 221 -98 l22 -19 -56 -120 -57 -120 -111 -41 c-203 -75 -249 -84 -447 -85 -97 -1 -179 2 -182 5 -12 12 17 127 51 198 98 206 329 322 559 280z m3944 -1109 l0 -1120 -1520 0 -1520 0 0 160 0 160 38 0 c22 0 73 9 116 20 236 60 419 249 471 486 20 88 17 193 -8 239 -20 39 -73 92 -111 113 -42 23 -170 23 -211 0 -39 -21 -93 -74 -111 -109 -8 -15 -18 -58 -23 -94 -15 -102 -53 -151 -133 -170 l-28 -7 0 721 0 721 1520 0 1520 0 0 -1120z m-3630 575 c19 -13 52 -45 73 -69 36 -44 37 -46 37 -129 0 -46 -5 -110 -11 -143 -45 -249 -293 -426 -539 -385 -190 31 -345 170 -392 350 -10 39 -17 105 -17 162 l-1 96 158 6 c178 6 273 26 452 95 128 50 186 54 240 17z"/>
                                    <path class="fill-gray-700" d="M2879 4786 c-180 -64 -214 -307 -59 -421 48 -35 90 -45 203 -45 l97 0 0 -97 0 -98 -193 -115 c-281 -169 -281 -172 0 -340 l192 -115 1 -96 0 -97 -117 -4 c-129 -4 -157 -13 -212 -69 -52 -52 -66 -86 -66 -169 0 -84 13 -116 67 -169 67 -66 64 -66 386 -69 346 -4 362 -1 436 78 25 27 46 56 46 65 0 13 41 15 345 15 l346 0 24 25 25 24 0 256 0 255 175 0 c239 0 225 -15 225 240 0 189 0 191 -25 215 l-24 25 -431 0 -431 0 -24 -25 c-21 -20 -25 -34 -25 -80 l0 -55 -107 0 -107 0 -173 103 -172 102 -1 98 0 97 98 0 c125 0 164 12 223 67 106 99 106 247 0 346 -27 25 -66 50 -87 56 -59 16 -589 14 -635 -3z m600 -156 c30 -15 46 -65 32 -99 -20 -48 -41 -51 -322 -51 l-260 0 -24 25 c-16 15 -25 36 -25 55 0 19 9 40 25 55 l24 25 266 0 c151 0 274 -4 284 -10z m-160 -716 c61 -37 111 -70 111 -74 0 -8 -217 -140 -230 -140 -16 0 -225 130 -225 140 0 11 202 138 222 139 6 1 61 -29 122 -65z m1321 -74 l0 -80 -320 0 -320 0 0 80 0 80 320 0 320 0 0 -80z m-800 -135 c0 -46 4 -60 25 -80 24 -25 27 -25 200 -25 l175 0 0 -200 0 -200 -289 0 -289 0 -6 23 c-8 35 -97 114 -142 126 -22 6 -83 11 -136 11 l-98 0 0 98 1 97 172 102 172 103 108 0 107 0 0 -55z m-353 -520 c44 -31 37 -111 -13 -134 -17 -7 -113 -11 -285 -11 l-260 0 -24 25 c-16 15 -25 36 -25 55 0 19 9 40 25 55 l24 25 268 0 c221 0 272 -3 290 -15z"/>
                                    <path class="fill-gray-700" d="M345 3095 l-25 -24 0 -236 c0 -222 1 -236 20 -255 13 -13 33 -20 60 -20 27 0 47 7 60 20 19 19 20 33 20 255 l0 236 -25 24 c-15 16 -36 25 -55 25 -19 0 -40 -9 -55 -25z"/>
                                    <path class="fill-black" d="M2414 2390 c-249 -45 -481 -226 -585 -456 -67 -148 -69 -166 -69 -696 0 -465 1 -479 20 -498 19 -19 33 -20 240 -20 l220 0 0 -39 0 -39 -132 -4 c-153 -4 -188 -17 -264 -94 -71 -74 -84 -123 -84 -329 0 -162 2 -177 20 -195 20 -20 33 -20 780 -20 747 0 760 0 780 20 18 18 20 33 20 195 0 206 -13 255 -84 329 -76 77 -111 90 -263 94 l-133 4 0 39 0 39 220 0 c208 0 221 1 240 20 21 21 21 29 18 523 l-3 502 -28 80 c-45 129 -102 220 -197 316 -100 101 -188 156 -320 200 -82 27 -111 32 -220 35 -69 2 -148 -1 -176 -6z m286 -172 c205 -37 403 -224 476 -448 16 -48 18 -105 22 -472 l3 -418 -641 0 -641 0 3 418 3 417 27 75 c40 114 74 168 162 255 165 164 346 218 586 173z m18 -1550 l-3 -52 -77 -25 -78 -25 -77 25 -78 25 -3 52 -3 52 161 0 161 0 -3 -52z m-294 -228 c64 -22 125 -40 136 -40 11 0 72 18 136 40 112 38 121 40 242 40 209 0 254 -37 260 -217 l4 -103 -641 0 -641 0 0 93 c0 119 23 171 90 205 39 19 59 22 171 22 122 0 131 -2 243 -40z"/>
                                    <path class="fill-black" d="M625 2301 c-216 -62 -394 -243 -449 -457 -23 -89 -23 -559 0 -647 35 -136 125 -270 239 -353 l65 -48 0 -77 0 -77 -132 -4 c-153 -4 -188 -17 -264 -94 -71 -74 -84 -123 -84 -329 0 -162 2 -177 20 -195 20 -20 33 -20 780 -20 747 0 760 0 780 20 18 18 20 33 20 195 0 206 -13 255 -84 329 -76 77 -111 90 -263 94 l-133 4 0 77 0 76 62 45 c115 84 211 227 243 362 22 93 21 556 -1 642 -56 218 -242 404 -460 460 -84 22 -259 20 -339 -3z m-35 -1312 c63 -20 96 -24 210 -24 141 0 222 16 325 66 l40 20 -48 -45 c-60 -57 -156 -102 -247 -117 -133 -22 -289 25 -387 117 l-48 45 40 -20 c22 -10 74 -30 115 -42z m210 -264 c52 0 110 3 128 7 l32 8 0 -50 0 -50 -160 0 -160 0 0 50 0 50 33 -8 c17 -4 75 -7 127 -7z m547 -261 c19 -9 46 -33 61 -52 25 -32 27 -44 31 -144 l3 -108 -642 0 -642 0 4 108 c3 102 5 111 32 146 50 67 36 65 604 66 456 0 518 -2 549 -16z"/>
                                    <path class="fill-black" d="M4080 2301 c-188 -60 -329 -203 -384 -390 -23 -79 -23 -625 0 -714 35 -136 125 -270 239 -353 l65 -48 0 -77 0 -77 -132 -4 c-153 -4 -188 -17 -264 -94 -71 -74 -84 -123 -84 -329 0 -162 2 -177 20 -195 20 -20 33 -20 780 -20 747 0 760 0 780 20 18 18 20 33 20 195 0 206 -13 255 -84 329 -76 77 -111 90 -263 94 l-133 4 0 77 0 76 62 45 c77 56 148 142 193 231 59 115 65 160 65 476 0 262 -2 286 -21 338 -27 73 -101 148 -169 172 l-50 18 0 102 c0 153 21 143 -312 142 -233 0 -281 -3 -328 -18z m30 -1312 c63 -20 96 -24 210 -24 141 0 222 16 325 66 l40 20 -48 -45 c-98 -92 -254 -139 -387 -117 -91 15 -187 60 -247 117 l-48 45 40 -20 c22 -10 74 -30 115 -42z m210 -264 c52 0 110 3 128 7 l32 8 0 -50 0 -50 -160 0 -160 0 0 50 0 50 33 -8 c17 -4 75 -7 127 -7z m521 -256 c85 -29 119 -97 119 -239 l0 -70 -640 0 -640 0 0 83 c0 45 5 99 10 119 13 45 60 95 103 107 48 14 1006 14 1048 0z"/>
                                </g>
                           </svg>
                            <div class="ml-4 text-lg text-indigo-600 hover:text-indigo-900 leading-7 font-semibold transition"><a href="{{ route('office.trainings.index') }}">{{ __('Training Management') }}</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm italic text-justify">
                                {{ __('In this session you will be able to manage all the tasks involved in planning, developing and monitoring training. You can register new events, access participant lists, generate certificates, among other tasks.') }}
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t text-gray-500 hover:text-black transition border-gray-300">
                        <div class="flex items-center">

                            <svg x="0px" y="0px" fill="gray" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8 text-gray-400"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" opacity="60%">
                            <g>
                                <g>
                                    <path d="M486.4,0c-14.114,0-25.6,11.486-25.6,25.6v93.867h-25.6V53.504c0-10.684-8.695-19.371-19.371-19.371h-63.659
                                        c-10.675,0-19.371,8.687-19.371,19.371v65.963h-25.6V53.504c0-10.684-8.695-19.371-19.371-19.371h-63.659
                                        c-10.675,0-19.371,8.687-19.371,19.371v65.963h-25.6V53.504c0-10.684-8.695-19.371-19.371-19.371H96.171
                                        c-10.675,0-19.371,8.687-19.371,19.371v65.963H51.2V25.6C51.2,11.486,39.714,0,25.6,0S0,11.486,0,25.6V512h51.2v-51.2h25.6h102.4
                                        h25.6h102.4h25.6h102.4h25.6V512H512V25.6C512,11.486,500.514,0,486.4,0z M460.8,443.733h-25.6v-65.963
                                        c0-10.684-8.695-19.371-19.371-19.371h-63.659c-10.675,0-19.371,8.687-19.371,19.371v65.963h-25.6v-65.963
                                        c0-10.684-8.695-19.371-19.371-19.371h-63.659c-10.675,0-19.371,8.687-19.371,19.371v65.963h-25.6v-65.963
                                        c0-10.684-8.695-19.371-19.371-19.371H96.171c-10.675,0-19.371,8.687-19.371,19.371v65.963H51.2V298.667h25.6h102.4h25.6h102.4
                                        h25.6h102.4h25.6V443.733z M460.8,281.6h-25.6v-65.963c0-10.684-8.695-19.371-19.371-19.371h-63.659
                                        c-10.675,0-19.371,8.687-19.371,19.371V281.6h-25.6v-65.963c0-10.684-8.695-19.371-19.371-19.371h-63.659
                                        c-10.675,0-19.371,8.687-19.371,19.371V281.6h-25.6v-65.963c0-10.684-8.695-19.371-19.371-19.371H96.171
                                        c-10.675,0-19.371,8.687-19.371,19.371V281.6H51.2V136.533h25.6h102.4h25.6h102.4h25.6h102.4h25.6V281.6z"/>
                                </g>
                            </g>
                            </svg>

                            <div class="ml-4 text-lg text-indigo-600 hover:text-indigo-900 leading-7 font-semibold transition"><a href="#">{{ __('Stock Management') }}</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm italic text-justify">
                                {{ __('We provide a great tool for inventory management here. All materials are registered and cataloged by product category. You will be able to filter the information of each product by its previously defined category and code.') }}
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t text-gray-500 hover:text-black transition border-gray-300 md:border-l">
                        <div class="flex items-center" style="color: #646464">
                            <svg x="0px" y="0px" fill="gray" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8 text-gray-400" opacity="45%"
                                width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path fill="#444444" d="M112.066,319.819c21.252-14.114,44.849-21.851,67.67-29.382c3.279-1.078,6.554-2.137,9.813-3.239
                                        l0.668-0.221c4.822-1.689,9.393-3.284,13.134-5.345c0.169-0.394,0.411-1.049,0.7-2.135c-18.788-27.428-31.554-69.82-31.554-106.136
                                        c0-30.807,9.682-53.629,27.941-67.526c-7.894-3.991-17.416-5.527-27.663-5.527c-27.307,0-49.442,10.91-49.442,50.082
                                        c0,26.007,9.755,57.906,24.296,76.43c-0.135,1.464-0.308,2.931-0.571,4.388c-0.867,3.979-2.261,8.437-5.981,10.646
                                        c-4.174,2.478-8.81,4.051-13.372,5.649c-18.912,6.365-38.472,11.975-55.258,23.121c-8.727,5.745-14.639,15.713-17.9,25.506
                                        c-3.359,10.163-4.733,24.371-4.526,32.371h51.575C104.868,324.5,108.354,322.258,112.066,319.819z"/>
                                    <path fill="#444444" d="M457.457,296.129c-3.263-9.793-9.178-19.379-17.9-25.125c-16.79-11.145-36.352-16.946-55.262-23.307
                                        c-4.563-1.598-9.197-3.267-13.366-5.746c-3.726-2.213-5.121-6.715-5.982-10.698c-0.382-2.108-0.619-4.25-0.736-6.378
                                        c13.712-18.761,22.809-49.369,22.809-74.471c0-39.18-22.137-50.097-49.443-50.097c-10.385,0-20.009,1.594-27.967,5.706
                                        c18.105,13.913,27.697,36.684,27.697,67.366c0,35.358-11.861,76.072-29.895,103.673c0.049,0.313,0.097,0.619,0.153,0.925
                                        c0.475,2.141,0.864,3.259,1.106,3.814c3.955,2.205,8.687,3.935,13.973,5.794l7.919,2.639c23.412,7.773,47.621,15.722,69.428,30.19
                                        c3.524,2.325,6.852,4.085,9.971,8.085h52.019C462.189,320.5,460.813,306.292,457.457,296.129z"/>
                                </g>
                                <path d="M414.744,368.006c-4.354-13.059-12.239-25.999-23.867-33.668c-22.386-14.854-48.47-22.674-73.685-31.155
                                    c-6.084-2.133-12.264-4.395-17.82-7.701c-4.969-2.953-6.827-8.97-7.979-14.28c-0.507-2.816-0.824-5.678-0.981-8.519
                                    c18.282-25.013,30.413-65.829,30.413-99.3c0-52.24-29.516-66.796-65.926-66.796c-36.408,0-65.922,14.541-65.922,66.776
                                    c0,34.67,13.006,77.204,32.395,101.912c-0.181,1.947-0.41,3.902-0.76,5.842c-1.159,5.303-3.018,11.249-7.975,14.194
                                    c-5.568,3.308-11.749,5.399-17.832,7.532c-25.215,8.489-51.297,15.965-73.677,30.827c-11.636,7.661-19.52,21.277-23.867,34.336
                                    c-4.48,13.551-6.311,30.494-6.035,43.494h164.772h164.773C421.053,398.5,419.219,381.556,414.744,368.006z"/>
                            </svg>
                            <div class="ml-4 text-lg text-indigo-600 hover:text-indigo-900 leading-7 font-semibold transition"><a href="{{ route('office.users.index') }}">{{ __('Users Management') }}</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-justify italic">
                                {{ __('In this session you are having access to all the people involved in this ministry. Here you can add, select, edit, delete members, and you can define roles and access rules for each of these members.') }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
