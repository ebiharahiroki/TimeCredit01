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
                <div class="mx-auto my-5 px-3 w-80">
                    <form action="/hours/store" method="POST">
                        @csrf
                        <div class="Year py-1">
                            <select name="hour[year_id]" class="text-md px-3 py-2 rounded-lg 
                            w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md 
                            focus:border-gray-600">
                                @foreach($years as $year)
                                    <option value="{{ $year->id }}">{{ $year->year }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="Month py-1">
                            <select name="hour[month_id]" class="text-md px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:outline-none focus:border-gray-600 focus:placeholder-gray-500 focus:bg-white">
                                @foreach($months as $month)
                                    <option value="{{ $month->id }}">{{ $month->month }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="target_value py-1">
                            <input placeholder="欲しい自由時間（全て半角数字入力）" type="text"
                            name="hour[target_value]" class="text-md
                            px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300
                            placeholder-gray-600 shadow-md focus:border-gray-600"
                            value="{{ old('hour.target_value__error') }}"/>
                            <p class="target_value" style="color:red">
                                {{ $errors->first('hour.target_value') }}
                            </p>
                        </div>
                        
                        <div class="py-1">
                            <input placeholder="家賃" type="text" name="hour[rent]"
                            class="text-md px-3 py-2 rounded-lg w-full bg-white border-2
                            border-gray-300 placeholder-gray-600 shadow-md focus:border-gray-600" value="{{ old('hour.rent') }}"/>
                            <p class="rent__error" style="color:red">
                                {{ $errors->first('hour.rent') }}
                            </p>
                        </div>
                        
                        <div class="py-1">
                            <input placeholder="水道代" type="text"
                            name="hour[water_cost]" class="text-md px-3 py-2 rounded-lg
                            w-full bg-white border-2 border-gray-300 placeholder-gray-600
                            shadow-md focus:border-gray-600"
                            value="{{ old('hour.water_cost') }}"/>
                            <p class="water_cost__error" style="color:red">
                                {{ $errors->first('hour.water_cost') }}
                            </p>
                        </div>
                        
                        <div class="py-1">
                            <input placeholder="光熱費" type="text"
                            name="hour[utility_cost]" class="text-md px-3 py-2 rounded-lg
                            w-full bg-white border-2 border-gray-300 placeholder-gray-600
                            shadow-md focus:border-gray-600"
                            value="{{ old('hour.utility_cost') }}"/>
                            <p class="utility_cost__error" style="color:red">
                                {{ $errors->first('hour.utility_cost') }}
                            </p>
                        </div>
                        
                        <div class="py-1">
                            <input placeholder="食費" type="text"
                            name="hour[food_cost]" class="text-md px-3 py-2 rounded-lg
                            w-full bg-white border-2 border-gray-300 placeholder-gray-600
                            shadow-md focus:border-gray-600"
                            value="{{ old('hour.food_cost') }}"/>
                            <p class="food_cost__error" style="color:red">
                                {{ $errors->first('hour.food_cost') }}
                            </p>
                        </div>
                        
                        <div class="py-1">
                            <input placeholder="通信費" type="text"
                            name="hour[phone_cost]" class="text-md px-3 py-2 rounded-lg
                            w-full bg-white border-2 border-gray-300 placeholder-gray-600
                            shadow-md focus:border-gray-600"
                            value="{{ old('hour.phone_cost') }}"/>
                            <p class="phone_cost__error" style="color:red">
                                {{ $errors->first('hour.phone_cost') }}
                            </p>
                        </div>
                        
                        <div class="py-1">
                            <input placeholder="その他" type="text"
                            name="hour[other_cost]" class="text-md px-3 py-2 rounded-lg
                            w-full bg-white border-2 border-gray-300 placeholder-gray-600
                            shadow-md focus:border-gray-600"
                            value="{{ old('hour.other_cost') }}"/>
                            <p class="other_cost__error" style="color:red">
                                {{ $errors->first('hour.other_cost') }}
                            </p>
                        </div>
                        
                        <div class="py-1">
                            <input placeholder="収入" type="text"
                            name="hour[income]" class="text-md px-3 py-2 rounded-lg
                            w-full bg-white border-2 border-gray-300 placeholder-gray-600
                            shadow-md focus:border-gray-600"
                            value="{{ old('hour.income') }}"/>
                            <p class="income__error" style="color:red">
                                {{ $errors->first('hour.income') }}
                            </p>
                        </div>
                        
                        <div class="py-1">
                            <input placeholder="時給" type="text"
                            name="hour[hourly_wage]" class="text-md px-3 py-2 rounded-lg
                            w-full bg-white border-2 border-gray-300 placeholder-gray-600
                            shadow-md focus:border-gray-600"
                            value="{{ old('hour.hourly_wage') }}"/>
                            <p class="hourly_wage__error" style="color:red">
                                {{ $errors->first('hour.hourly_wage') }}
                            </p>
                        </div>
                        <input type="submit" value="保存" class="mt-3 text-lg font-semibold
                        bg-gray-800 w-full text-white rounded-lg px-6 py-3 shadow-xl
                        hover:text-white hover:bg-black cursor-pointer"/>
                    </form>
                    <div class="footer">
                        <a href="/" class="flex items-center justify-center mt-3 text-lg
                        font-semibold bg-gray-800 w-full text-white rounded-lg px-1 py-3
                        shadow-xl hover:text-white hover:bg-black">戻る</a>
                    </div>
                </div>                                      
            </div>
            <!--end::Right Side-->
        </div> 
    </body>
</x-app-layout>