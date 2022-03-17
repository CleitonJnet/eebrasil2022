<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('National Director') }}
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
                        {{ __('This ministerial management module was developed so that the FieldWorker missionary has easy access to the main information of his day to day. By completing the tasks proposed in this tool, you will easily fulfill the dynamics of the 4 Ps (Prayer, Partnership, Planning and Practice). Enjoy responsibly.') }}
                    </div>
                </div>

                <div class="bg-gray-300 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 text-gray-500 hover:text-black transition">
                        <div class="flex items-center">
                            <svg fill="gray" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8 text-gray-400" x="0" y="0" viewBox="0 0 1000 1000" opacity="60%">
                                <g>
                                    <g>
                                        <polygon points="726.7,704 726.7,990 930.7,990 930.7,821.9 "/>
                                        <polygon points="644.8,544.3 644.8,339.6 355.1,339.6 355.1,544.3 500,458.6 "/>
                                        <polygon points="69.3,990 273.3,990 273.3,703.8 69.3,821.9 "/>
                                        <path d="M294.6,604.8v385.1h410.8V604.8L500,483.3L294.6,604.8z M490.8,974.3h-76.7V795.4h76.7V974.3L490.8,974.3z M585.9,974.3h-76.7V795.4h76.7V974.3z M589.5,711.3H410.5c0-49.4,40.1-89.5,89.5-89.5C549.4,621.8,589.5,661.9,589.5,711.3z"/>
                                        <polygon points="386.1,319.4 613.9,319.4 510.7,126.6 510.7,64.3 553.3,64.3 553.3,43 510.7,43 510.7,10 489.3,10 489.3,43 446.7,43 446.7,64.3 489.3,64.3 489.3,126.6 "/>
                                    </g>
                                </g>
                            </svg>
                            <div class="ml-4 text-lg text-indigo-600 hover:text-indigo-900 leading-7 font-semibold transition"><a href="{{ route('fieldworker.churches.index') }}">{{ __('Partner Management') }}</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-justify italic">
                                {{ __('In this session you will be able to manage all the churches that you have trained. Some churches may be directed to you through the office or another missionary. Here you can register, update information and delete churches from the database.') }}
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t text-gray-500 hover:text-black transition border-gray-300 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="gray" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8 text-gray-400" x="0" y="0" viewBox="0 0 1000 1000" opacity="60%">
                                <g>
                                    <g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)">
                                        <path d="M1389,3903.4c-251.6-90.2-413-249.3-508-503.3c-64.1-166.2-54.6-432,21.4-598.2c66.5-151.9,244.5-337.1,394.1-410.7c227.9-111.6,562.6-99.7,771.5,28.5c467.6,289.6,538.9,930.5,144.8,1298.5c-161.4,151.9-301.5,211.3-522.2,220.8C1559.9,3946.1,1479.2,3936.6,1389,3903.4z"/>
                                        <path d="M8106.9,3912.9c-140.1-45.1-246.9-116.3-360.8-239.8c-339.5-370.3-258.7-961.4,166.2-1234.4c225.5-144.8,555.5-166.2,795.2-47.5c147.2,71.2,325.2,256.4,396.4,410.7c80.7,170.9,73.6,491.4-9.5,671.8c-132.9,282.5-389.3,451-709.8,465.3C8277.8,3943.8,8166.2,3931.9,8106.9,3912.9z"/>
                                        <path d="M1602.6,2130.2c-118.7-19-258.7-54.6-308.6-80.7c-166.2-83.1-268.2-239.8-268.2-410.7c0-175.7,261.1-2661,287.2-2744.1c35.6-106.8,149.5-232.6,268.2-296.7c95-49.8,123.4-52.2,1018.4-59.4l918.7-7.1v-1125.2v-1127.6h439.2h439.2v1350.7c0,892.5-9.5,1374.4-26.1,1419.5c-42.7,118.7-144.8,242.1-254,315.7l-106.8,71.2h-636.2c-382.2,0-640.9,9.5-650.4,23.7c-7.1,11.9-66.5,531.7-130.6,1156c-64.1,624.3-128.2,1172.7-142.4,1220.1C2371.7,2113.6,2103.5,2206.1,1602.6,2130.2z"/>
                                        <path d="M7855.2,2134.9c-130.6-40.4-244.5-142.4-287.2-258.8c-23.7-64.1-83.1-543.6-156.7-1255.7c-64.1-633.8-118.7-1160.8-118.7-1167.9c0-9.5-292-16.6-650.4-16.6h-650.4l-113.9-78.3c-64.1-45.1-147.2-132.9-187.5-194.6L5619.1-951l-7.1-1386.3l-4.8-1383.9h439.2h439.2v1127.6v1125.2l921,7.1c892.6,7.1,921,9.5,1016,59.4c118.7,64.1,232.7,189.9,268.3,296.7c26.1,83.1,287.2,2573.2,287.2,2744.1c0,170.9-106.8,330-277.8,417.8c-83.1,40.4-500.9,109.2-659.9,106.8C7988.2,2163.4,7905.1,2149.2,7855.2,2134.9z"/>
                                        <path d="M202.1,1555.7c-61.7-7.1-102.1-21.4-102.1-40.3c0-142.4,270.6-2623,296.7-2729.9c130.6-512.8,538.9-923.4,1068.2-1077.7c78.3-21.4,282.5-38,600.6-45.1l479.5-11.9v-686v-686h237.4h237.4v890.2v890.2h-659.9c-716.9,0-833.2,14.3-1054,135.3c-211.3,113.9-405.9,360.8-467.6,588.7c-23.7,92.6-287.2,2575.6-287.2,2718c0,71.2,0,71.2-123.4,66.5C358.7,1565.2,256.7,1560.5,202.1,1555.7z"/><path d="M9336.5,311.8c-149.5-1478.9-154.3-1514.5-227.9-1678.3c-71.2-154.3-261.1-356.1-410.7-439.2c-220.8-121.1-337.1-135.3-1054-135.3H6984v-890.2v-890.2h237.4h237.4v686v686l481.9,11.9c315.7,7.1,519.9,23.7,598.2,45.1c529.4,154.3,937.7,567.4,1065.8,1077.7c35.6,135.3,313.3,2734.6,294.3,2751.2c-4.7,4.8-104.4,16.6-220.7,26.1l-213.7,14.2L9336.5,311.8z"/>
                                    </g>
                                </g>
                            </svg>
                            <div class="ml-4 text-lg text-indigo-600 hover:text-indigo-900 leading-7 font-semibold transition"><a href="#">{{ __('Coaching Session Management') }}</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-justify italic">
                                {{ __('In this session you will be able to manage all the tasks involved in planning, developing and monitoring training. You can register new events, access participant lists, generate certificates, among other tasks.') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
