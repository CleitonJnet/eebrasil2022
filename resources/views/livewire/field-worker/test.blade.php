<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('FieldWorker') }}
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
                            <div class="ml-4 text-lg text-indigo-600 hover:text-indigo-900 leading-7 font-semibold transition"><a href="{{ route('fieldworker.churches.index') }}">{{ __('Church Management') }}</a></div>
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
                                        <path d="M4759.2,4995.1c-271.9-44-515.3-230.4-637-489.4c-54.4-116.5-67.3-181.3-67.3-349.6c0-183.8,10.4-230.4,85.4-380.6c95.8-196.8,212.3-310.7,419.5-406.5c189-88,492-93.2,678.4-10.4c163.1,75.1,347,248.6,429.8,409.1c95.8,186.4,108.8,486.8,33.7,688.8c-69.9,181.3-217.5,352.2-380.6,442.8c-111.4,59.5-170.9,77.7-385.8,108.7C4906.8,5013.2,4829.1,5008,4759.2,4995.1z"/>
                                        <path d="M2185.4,3651.2c-160.5-106.2-240.8-347-163.1-492c23.3-41.4-54.4-116.5-580-567.1c-510.1-437.6-618.8-520.5-688.8-520.5c-163.1,0-310.7-134.7-310.7-284.8c0-77.7,69.9-199.4,129.5-233c49.2-25.9,51.8-57,51.8-906.3v-880.4H429.8H235.6V-427v-191.6l266.7-7.8l264.1-7.8l7.8-2079.2l5.2-2076.6h194.2h194.2l5.2,2076.6l7.8,2079.2h1165.2h1165.2v-103.6v-103.6L3014-849l-499.7-5.2v-1398.2v-1398.2h207.1h207.1v1204v1204h359.9H3651l7.8-872.6l7.8-875.2l72.5-124.3c181.3-305.6,582.6-380.6,844.1-155.4c199.4,168.3,194.2,147.6,209.7,1134.1l12.9,880.4H5000h194.2l12.9-880.4c15.5-978.7,12.9-963.2,196.8-1123.8c119.1-106.1,196.8-134.6,365.1-137.2c165.7-2.6,347,80.3,437.6,202c126.9,165.7,139.8,264.1,139.8,1141.9v810.4H6709h362.5v-1204v-1204h207.1h207.2v1398.2v1398.2l-497.2,5.2l-499.7,7.8v103.6v103.6h1165.2h1165.2l7.8-2063.7l5.2-2066.3h194.2h194.2l5.2,2066.3l7.8,2063.7l266.7,7.8l264.1,7.8V-427v194.2l-2283.8,2.6l-2286.4,2.6l129.5,62.1c155.4,75.1,290,77.7,880.4,23.3c227.9-20.7,499.7-38.8,603.3-38.8c181.3,0,186.4,2.6,186.4,62.1c0,46.6-15.5,64.7-57,72.5c-57,7.8-59.6,20.7-67.3,258.9c-7.8,238.2-10.4,253.7-64.7,266.7c-31.1,5.2-463.5,12.9-963.2,18.1c-497.2,2.6-934.8,5.2-971,5.2c-1082.3,5.2-1900.6-12.9-1918.7-41.4c-12.9-18.1-23.3-134.6-23.3-258.9c0-207.1-5.2-227.9-49.2-227.9c-64.7,0-93.2-77.7-44-124.3c33.7-36.3,106.2-33.7,616.3,5.2c758.7,57,880.4,54.4,1043.5-23.3l129.5-59.6L2721.4-225l-1903.2,5.2l-7.8,859.6l-5.2,859.7l64.7,44c98.4,64.7,150.2,181.3,132.1,297.8l-15.5,95.8l538.6,460.9c295.2,251.2,561.9,481.6,593,510.1c82.8,72.5,126.9,25.9,145-152.8c10.4-95.8,41.4-189,88.1-266.7c124.3-202,142.4-194.2,613.7,279.6c398.8,403.9,409.1,416.9,372.9,473.9c-59.6,88-233,176.1-388.4,194.2c-119.1,12.9-155.4,31.1-258.9,132c-111.3,108.8-134.6,119.1-271.9,126.9C2299.3,3703,2252.7,3695.2,2185.4,3651.2z"/>
                                        <path d="M4471.8,3042.7c-414.3-113.9-815.6-458.3-1035.7-888.1c-170.9-331.4-248.6-655.1-266.7-1084.9l-15.5-344.4h388.4h388.4l18.1,150.2c46.6,406.5,101,779.4,121.7,810.5c15.5,25.9,28.5,28.5,49.2,7.8c31.1-31.1,38.8-686.2,10.4-864.8l-15.5-95.8l782-2.6l782-2.6l-12.9,95.8c-7.8,51.8-23.3,258.9-33.7,458.3c-12.9,305.5-10.4,367.7,20.7,396.2c69.9,57,95.8-20.7,160.5-486.8c36.2-243.4,69.9-450.5,75.1-455.7c5.2-5.2,173.5-18.1,375.4-28.5l362.5-15.5l20.7,124.3c25.9,176.1-7.8,567.1-67.3,805.3c-181.3,706.9-696.5,1237.7-1362,1408.6C4987.1,3089.3,4663.4,3094.5,4471.8,3042.7z"/>
                                    </g>
                                </g>
                            </svg>
                            <div class="ml-4 text-lg text-indigo-600 hover:text-indigo-900 leading-7 font-semibold transition"><a href="{{ route('fieldworker.trainings.index') }}">{{ __('Training Management') }}</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-justify italic">
                                {{ __('In this session you will be able to manage all the tasks involved in planning, developing and monitoring training. You can register new events, access participant lists, generate certificates, among other tasks.') }}
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t text-gray-500 hover:text-black transition border-gray-300">
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
                            <div class="ml-4 text-lg text-indigo-600 hover:text-indigo-900 leading-7 font-semibold transition"><a href="{{ route('fieldworker.coaching.index') }}">{{ __('Coaching Session Management') }}</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-justify italic">
                                {{ __('This is an exclusive session for you and your coach. Only the two of you should access the information contained here. Here you can schedule your sessions where you and your coach will be able to follow the progress of the tasks proposed by your coach. Only you will be able to edit and delete the information contained in the sessions.') }}
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t text-gray-500 hover:text-black transition border-gray-300 md:border-l">
                        <div class="flex items-center">
                            <svg fill="gray" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8 text-gray-400" x="0" y="0" viewBox="0 0 1000 1000" opacity="60%">
                                <g>
                                    <path d="M138.5,232.4l167.7,54.9l-19.3,59.1l114.4,6.2l-28.7,30.2l-95.6-6.1l-72,219.8l40.8,25.2c1.1-8,2.4-13.9,2.4-13.9s38.2,8.1,39.8,19.4c0.6,4-0.6,11.4-2.4,19.2l2.4,1.5l-4.7,7.5c-3,11-6.2,20.7-6.2,20.7s-22-2.7-29.6-17.3c-0.4-0.8-0.8-1.6-1.1-2.6l-50.8-31.5L177.7,680L10,625.1L138.5,232.4L138.5,232.4z M728.3,279.3l18.1,62.9L660,368.8l-88.2-40.9l-126.9,10.8l-77.5,73.2c0,0,7,31.8,25.3,31.8c18.3,0,56.5-40.4,56.5-40.4l92.5,4.3l187.6,110.9l0,0l0,0l2,1.1c10.6,8.9-1.2,53-16.7,57.9L571.3,510l-13,27.5l118.1,55.6c0.3,3,0,6.6-0.9,10.3c-1.1,4.8-3.3,9.6-6.2,14c-3.2,4.6-7.4,8.4-12.5,10.5l-143.3-67.5l-13,27.5L626,647.2c5.4,3.6-5.9,31.7-18.3,37l-135.7-63.9l-13,27.5l106.3,50.1c2.2,7.5-5.8,32.1-18.3,37.5L471,699.6c1.6-9.9,2.7-18.3,2.1-21.9c-1.7-12.1-42.8-20.8-42.8-20.8s-1.6,9.6-3,22.2l-15.9-7.5l-1.4,3c2.7-15.3,4.5-28.7,3.7-34.2c-2.3-15.8-55.9-27.2-55.9-27.2s-13.6,82.3-3,102.7c10.6,20.4,41.5,24.2,41.5,24.2s4.1-17.5,8.4-38l20.3,9.5c-0.1,10.2,0.6,19.2,3.1,23.9c8.1,15.6,31.8,18.5,31.8,18.5s2.4-10.4,5.2-23.5l74.3,35l4.5,2.2l4.9-1c24.9-4.9,43.8-29.6,46.4-54.6l4.8,2.3l4.6,2.1l4.9-0.9c15.1-3,26.6-12.1,34.5-23.5c6.2-9,10.7-20.7,11.8-32.2l2.5-0.5c15.6-3,27.7-12.6,35.9-24.5l0.2-0.3l126.7-31.6l12.3,43L990,600.9L884.8,234.4L728.3,279.3L728.3,279.3z M302.7,613.2c0,0-9.7,58.6-2.2,73.2c7.5,14.6,29.6,17.2,29.6,17.2s14-59.7,12.4-71C340.9,621.2,302.7,613.2,302.7,613.2z"/>
                                </g>
                            </svg>
                            <div class="ml-4 text-lg text-indigo-600 hover:text-indigo-900 leading-7 font-semibold transition"><a href="{{ route('fieldworker.partners.index') }}">{{ __('Partner Management') }}</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-justify italic">
                                {{ __('In this session you will be able to manage all your ministry partners. We are providing a dashboard so you know where you are in terms of fundraising. In this way, you will be able to set goals and routines so that you are successful in raising funds. You will still be able to register new partners and register the amounts received.') }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
