<x-app-layout>
    <body>
        <div class="flex">
            <div class="flex-1 basis-2/5 bg-white rounded-lg shadow-xl p-7 m-4">
                <h4 class="text-xl font-sans text-gray-900 font-bold">計算方法</h4>
                <p class="text-xs text-gray-500">半角数字のみで入力してね</p>
                <div class="relative px-4">
                    <div class="absolute h-full border border-dashed border-opacity-20"></div>

                    <!-- start::Timeline item -->
                    <div class="flex items-center w-full my-6 py-3 -ml-1.5">
                        <div class="w-1/12 z-10">
                            <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                        </div>
                        <div class="w-11/12">
                            <p class="font-sans font-bold">まず生活費の合計を計算するよ</p>
                        </div>
                    </div>
                    <!-- end::Timeline item -->

                    <!-- start::Timeline item -->
                    <div class="flex items-center w-full my-6 py-3 -ml-1.5">
                        <div class="w-1/12 z-10">
                            <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                        </div>
                        <div class="w-11/12">
                            <p class="font-sans font-bold">次に収入から生活費を引いて差額を計算するよ</p>
                            <p class="text-xs text-gray-500">収入は税引後の手元に残るお金もしくは生活費に税金を加える</p>
                        </div>
                    </div>
                    <!-- end::Timeline item -->

                    <!-- start::Timeline item -->
                    <div class="flex items-center w-full my-6 py-3 -ml-1.5">
                        <div class="w-1/12 z-10">
                            <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                        </div>
                        <div class="w-11/12">
                            <p class="font-sans font-bold">収入と生活費の差額を時給で割って働かずに自由に使えた時間を
                            計算するよ</p>
                            <p class="text-xs text-gray-500"></p>
                        </div>
                    </div>
                    <!-- end::Timeline item -->

                    <!-- start::Timeline item -->
                    <div class="flex items-center w-full my-6 py-3 -ml-1.5">
                        <div class="w-1/12 z-10">
                            <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                        </div>
                        <div class="w-11/12">
                            <p class="font-sans font-bold">
                                例：(収入30万 - 生活費20万) / 時給2000円=自由時間50時間</p>
                            <p class="text-xs text-gray-500"></p>
                        </div>
                    </div>
                    <!-- end::Timeline item -->

                    <!-- start::Timeline item -->
                    <div class="flex items-center w-full my-6 py-3 -ml-1.5">
                        <div class="w-1/12 z-10">
                            <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                        </div>
                        <div class="w-11/12">
                            <p class="font-sans font-bold">働きすぎ防止や時間の使い方を再考するきっかけにしてね</p>
                            <p class="text-xs text-gray-500"></p>
                        </div>
                    </div>
                     <!--end::Timeline item -->
                </div>
            </div>
            
            <!--start::Right Side-->
            <div class="flex basis-3/5 bg-white rounded-lg shadow-xl m-4">
                <div class="mx-auto my-5 w-80">
                    <form action="/hours/store" method="POST">
                        @csrf
                        <div class="mx-auto max-w-lg ">
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">Year</span>
                                <span class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">{{ $hour->year->year }}</span>
                            </div>
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">Month</span>
                                <span class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">{{ $hour->month->month }}</span>
                            </div>
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">＋αで欲しい自由時間</span>
                                <span class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">{{ $hour->target_value }}時間</span>
                            </div>
                            
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">家賃</span>
                                <span class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">{{ $hour->rent }}円</span>
                            </div>
                            
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">水道代</span>
                                <span class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">{{ $hour->water_cost }}円</span>
                            </div>
                            
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">光熱費</span>
                                <span class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">{{ $hour->utilitiy_cost }}円</span>
                            </div>
                            
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">食費</span>
                                <span class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">{{ $hour->food_cost }}円</span>
                            </div>
                            
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">通信費</span>
                                <span class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">{{ $hour->phone_cost }}円</span>
                            </div>
                            
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">その他</span>
                                <span class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">{{ $hour->other_cost }}円</span>
                            </div>
                            
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">収入</span>
                                <span class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">{{ $hour->income }}円</span>
                            </div>
                            
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">時給</span>
                                <span class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">{{ $hour->hourly_wage }}円</span>
                            </div>
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">自由に使えた時間</span>
                                <span class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">{{ $hour->amount }}時間</span>
                            </div>
                        </div>
                    <div class="footer">
                        <a href="/" class="flex items-center justify-center mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-1 py-3 block shadow-xl hover:text-white hover:bg-black">戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>
