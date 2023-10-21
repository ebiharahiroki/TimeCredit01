<x-app-layout>
    <body>
        <div class="flex">
            <div class="flex-1 bg-white rounded-lg shadow-xl mt-4 p-8 m-4">
                <h4 class="text-xl font-sans text-gray-900 font-bold">計算方法</h4>
                <p class="text-xs text-gray-500">半角数字のみで入力してね</p>
                <div class="relative px-4">
                    <div class="absolute h-full border border-dashed border-opacity-20 border-secondary"></div>

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
                            <p class="font-sans font-bold">
                                次に収入から生活費を引いて差額を計算するよ <a href="#" class="text-blue-600 font-bold"></a>.</p>
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
                            <p class="font-sans font-bold">収入と生活費の差額を時給で割って働かずに自由に使えた時間を計算するよ</p>
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
                    <!-- end::Timeline item -->

                    <!-- start::Timeline item -->
                    <div class="flex items-center w-full my-6 py-3 -ml-1.5">
                        <div class="w-1/12 z-10">
                            <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                        </div>
                        <div class="w-11/12">
                            <p class="font-sans font-bold">
                                Message received from <a href="#" class="text-blue-600 font-bold">Jane Stillman</a>.</p>
                            <p class="text-xs text-gray-500"></p>
                        </div>
                    </div>
                    <!-- end::Timeline item -->
                </div>
            </div>
 
 
 
 <div class="flex-[2_2_0%] overflow-hidden rounded-lg border border-gray-200 shadow-md m-4">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
          <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <tr class="hover:bg-gray-50">
              <td class="px-6 pb-3 text-gray-600">
                  
                  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
                <div class="max-w-full mx-auto md:px-6">
                  <div class="max-w-sm mx-auto px-6">
                        <div class="relative flex flex-wrap">
                            <div class="w-full relative">
                                <div class="md:mt-6">
                                    <form action="/hours/store" method="POST">
                                        @csrf
                                        <div class="mx-auto max-w-lg ">
                                            <div class="Year">
                                                <select name="hour[year_id]" class="text-md block px-3 py-2 rounded-lg 
                                                w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md 
                                                focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 
                                                focus:outline-none">
                                                    @foreach($years as $year)
                                                        <option value="{{ $year->id }}">{{ $year->year }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="Month">
                                                <select name="hour[month_id]" class="text-md block px-3 py-2 rounded-lg
                                                w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                                focus:placeholder-gray-500 focus:bg-white focus:border-gray-600
                                                focus:outline-none">
                                                    @foreach($months as $month)
                                                        <option value="{{ $month->id }}">{{ $month->month }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="target_value py-1">
                                                <input placeholder="欲しい自由時間（全て半角数字のみで入力）" type="text"
                                                x-model="target_value" name="hour[target_value]" class="text-md block
                                                px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300
                                                placeholder-gray-600 shadow-md focus:placeholder-gray-500
                                                focus:bg-white focus:border-gray-600 focus:outline-none"
                                                value="{{ old('hour.target_value') }}"/>
                                                <p class="target_value" style="color:red">
                                                    {{ $errors->first('hour.target_value') }}
                                                </p>
                                            </div>
                                            
                                            <div class="py-1">
                                                <input placeholder="家賃" type="text" x-model="rent" name="hour[rent]"
                                                class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2
                                                border-gray-300 placeholder-gray-600 shadow-md
                                                focus:placeholder-gray-500 focus:bg-white focus:border-gray-600
                                                focus:outline-none" value="{{ old('hour.rent') }}"/>
                                                <p class="rent__error" style="color:red">
                                                    {{ $errors->first('hour.rent') }}
                                                </p>
                                            </div>
                                            
                                            <div class="py-1">
                                                <input placeholder="水道代" type="text" x-model="water_cost"
                                                name="hour[water_cost]" class="text-md block px-3 py-2 rounded-lg
                                                w-full bg-white border-2 border-gray-300 placeholder-gray-600
                                                shadow-md focus:placeholder-gray-500 focus:bg-white
                                                focus:border-gray-600 focus:outline-none"
                                                value="{{ old('hour.water_cost') }}"/>
                                                <p class="water_cost__error" style="color:red">
                                                    {{ $errors->first('hour.water_cost') }}
                                                </p>
                                            </div>
                                            
                                            <div class="py-1">
                                                <input placeholder="光熱費" type="text" x-model="utilitiy_cost"
                                                name="hour[utilitiy_cost]" class="text-md block px-3 py-2 rounded-lg
                                                w-full bg-white border-2 border-gray-300 placeholder-gray-600
                                                shadow-md focus:placeholder-gray-500 focus:bg-white
                                                focus:border-gray-600 focus:outline-none"
                                                value="{{ old('hour.utilitiy_cost') }}"/>
                                                <p class="utilitiy_cost__error" style="color:red">
                                                    {{ $errors->first('hour.utilitiy_cost') }}
                                                </p>
                                            </div>
                                            
                                            <div class="py-1">
                                                <input placeholder="食費" type="text" x-model="food_cost"
                                                name="hour[food_cost]" class="text-md block px-3 py-2 rounded-lg
                                                w-full bg-white border-2 border-gray-300 placeholder-gray-600
                                                shadow-md focus:placeholder-gray-500 focus:bg-white
                                                focus:border-gray-600 focus:outline-none"
                                                value="{{ old('hour.food_cost') }}"/>
                                                <p class="food_cost__error" style="color:red">
                                                    {{ $errors->first('hour.food_cost') }}
                                                </p>
                                            </div>
                                            
                                            <div class="py-1">
                                                <input placeholder="通信費" type="text" x-model="phone_cost"
                                                name="hour[phone_cost]" class="text-md block px-3 py-2 rounded-lg
                                                w-full bg-white border-2 border-gray-300 placeholder-gray-600
                                                shadow-md focus:placeholder-gray-500 focus:bg-white
                                                focus:border-gray-600 focus:outline-none"
                                                value="{{ old('hour.phone_cost') }}"/>
                                                <p class="phone_cost__error" style="color:red">
                                                    {{ $errors->first('hour.phone_hour') }}
                                                </p>
                                            </div>
                                            
                                            <div class="py-1">
                                                <input placeholder="その他" type="text" x-model="other_cost"
                                                name="hour[other_cost]" class="text-md block px-3 py-2 rounded-lg
                                                w-full bg-white border-2 border-gray-300 placeholder-gray-600
                                                shadow-md focus:placeholder-gray-500 focus:bg-white
                                                focus:border-gray-600 focus:outline-none"
                                                value="{{ old('hour.other_cost') }}"/>
                                                <p class="other_cost__error" style="color:red">
                                                    {{ $errors->first('hour.other_cost') }}
                                                </p>
                                            </div>
                                            
                                            <div class="py-1">
                                                <input placeholder="収入" type="text" x-model="income"
                                                name="hour[income]" class="text-md block px-3 py-2 rounded-lg
                                                w-full bg-white border-2 border-gray-300 placeholder-gray-600
                                                shadow-md focus:placeholder-gray-500 focus:bg-white
                                                focus:border-gray-600 focus:outline-none"
                                                value="{{ old('hour.income') }}"/>
                                                <p class="income__error" style="color:red">
                                                    {{ $errors->first('hour.income') }}
                                                </p>
                                            </div>
                                            
                                            <div class="py-1">
                                                <input placeholder="時給" type="text" x-model="hourly_wage"
                                                name="hour[hourly_wage]" class="text-md block px-3 py-2 rounded-lg
                                                w-full bg-white border-2 border-gray-300 placeholder-gray-600
                                                shadow-md focus:placeholder-gray-500 focus:bg-white
                                                focus:border-gray-600 focus:outline-none"
                                                value="{{ old('hour.hourly_wage') }}"/>
                                                <p class="hourly_wage__error" style="color:red">
                                                    {{ $errors->first('hour.hourly_wage') }}
                                                </p>
                                            </div>
                                            <input type="submit" value="保存" class="mt-3 text-lg font-semibold
                                            bg-gray-800 w-full text-white rounded-lg px-6 py-3 block shadow-xl
                                            hover:text-white hover:bg-black"/>
                                        </div>
                                    </form>
                                    <div class="footer">
                                        <a href="/" class="flex items-center justify-center mt-3 text-lg
                                        font-semibold bg-gray-800 w-full text-white rounded-lg px-1 py-3 block
                                        shadow-xl hover:text-white hover:bg-black">戻る</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  
              </td>
            </tr>
          </tbody>
        </table>
      </div>
 
 
            
        </div> 
    </body>
</x-app-layout>