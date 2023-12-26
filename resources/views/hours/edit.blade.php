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
                <form action="/hours/{{ $hour->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mx-auto max-w-lg ">
                        <div class="Year">
                            <span class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 shadow-md">{{ $hour->year->year }}</span>
                        </div>
                        <div class="Month py-2">
                            <span class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 shadow-md">{{ $hour->month->month }}</span>
                        </div>
                        <div class="targetValue py-1">
                            <span class="px-1 font-sans font-bold text-gray-600">欲しい自由時間</span>
                            <input placeholder="欲しい自由時間" type="text" name="hour[targetValue]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 shadow-md y-600 focus:border-gray-600" value="{{ $hour->targetValue }}"/>
                            <p class="targetValue" style="color:red">
                                {{ $errors->first('hour.targetValue') }}
                            </p>
                        </div>
                        
                        <div class="py-1">
                            <span class="px-1 font-sans font-bold text-gray-600">家賃</span>
                            <input placeholder="家賃" type="text" x-model="rent" name="hour[rent]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 shadow-md focus:border-gray-600" value="{{ $hour->rent }}"/>
                            <p class="rent__error" style="color:red">
                                {{ $errors->first('hour.rent') }}
                            </p>
                        </div>
                        
                        <div class="py-1">
                            <span class="px-1 font-sans font-bold text-gray-600">水道代</span>
                            <input placeholder="水道代" type="text" x-model="waterCost" name="hour[waterCost]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 shadow-md focus:border-gray-600" value="{{ $hour->waterCost }}"/>
                            <p class="waterCost__error" style="color:red">
                                {{ $errors->first('hour.waterCost') }}
                            </p>
                        </div>
                        
                        <div class="py-1">
                            <span class="px-1 font-sans font-bold text-gray-600">光熱費</span>
                            <input placeholder="光熱費" type="text" x-model="utilityCost" name="hour[utilityCost]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 shadow-md focus:border-gray-600" value="{{ $hour->utilityCost }}"/>
                            <p class="utilityCost__error" style="color:red">
                                {{ $errors->first('hour.utilityCost') }}
                            </p>
                        </div>
                        
                        <div class="py-1">
                            <span class="px-1 font-sans font-bold text-gray-600">食費</span>
                            <input placeholder="食費" type="text" x-model="foodCost" name="hour[foodCost]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 shadow-md focus:border-gray-600" value="{{ $hour->foodCost }}"/>
                            <p class="foodCost__error" style="color:red">
                                {{ $errors->first('hour.foodCost') }}
                            </p>
                        </div>
                        
                        <div class="py-1">
                            <span class="px-1 font-sans font-bold text-gray-600">通信費</span>
                            <input placeholder="通信費" type="text" x-model="phoneCost" name="hour[phoneCost]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 shadow-md focus:border-gray-600" value="{{ $hour->phoneCost }}"/>
                            <p class="phoneCost__error" style="color:red">
                                {{ $errors->first('hour.phoneCost') }}
                            </p>
                        </div>
                        
                        <div class="py-1">
                            <span class="px-1 font-sans font-bold text-gray-600">その他</span>
                            <input placeholder="その他" type="text" x-model="otherCost" name="hour[otherCost]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 shadow-md focus:border-gray-600" value="{{ $hour->otherCost }}"/>
                            <p class="otherCost__error" style="color:red">
                                {{ $errors->first('hour.otherCost') }}
                            </p>
                        </div>
                        
                        <div class="py-1">
                            <span class="px-1 font-sans font-bold text-gray-600">収入</span>
                            <input placeholder="収入" type="text" x-model="income" name="hour[income]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 shadow-md focus:border-gray-600" value="{{ $hour->income }}"/>
                            <p class="income__error" style="color:red">
                                {{ $errors->first('hour.income') }}
                            </p>
                        </div>
                        
                        <div class="py-1">
                            <span class="px-1 font-sans font-bold text-gray-600">時給</span>
                            <input placeholder="時給" type="text" x-model="hourlyWage" name="hour[hourlyWage]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 shadow-md focus:border-gray-600" value="{{ $hour->hourlyWage }}"/>
                        </div>
                        <input type="submit" value="更新" class="mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:text-white hover:bg-black cursor-pointer"/>
                        <p class="hourlyWage__error" style="color:red">
                                {{ $errors->first('hour.hourlyWage') }}
                        </p>
                    </div>
                </form>
                <div class="footer">
                    <a href="/" class="flex items-center justify-center mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-1 py-3 block shadow-xl hover:text-white hover:bg-black">戻る</a>
                </div>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>
