<x-app-layout>
    <body>
        <div class="content">
            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
            <div class="container max-w-full mx-auto md:py-6 px-6">
              <div class="max-w-sm mx-auto px-6">
                    <div class="relative flex flex-wrap">
                        <div class="w-full relative">
                            <div class="md:mt-6">
                                <form action="/hours/{{ $hour->id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mx-auto max-w-lg ">
                                        <div class="Year">
                                            <span class="px-1 font-sans font-bold text-gray-600">Year</span>
                                            <select name="hour[year_id]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                                @foreach($years as $year)
                                                    <option value="{{ $year->id }}">{{ $year->year }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="Month">
                                            <span class="px-1 font-sans font-bold text-gray-600">Month</span>
                                            <select name="hour[month_id]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                                @foreach($months as $month)
                                                    <option value="{{ $month->id }}">{{ $month->month }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="target_value py-1">
                                            <span class="px-1 font-sans font-bold text-gray-600">欲しい自由時間</span>
                                            <input placeholder="欲しい自由時間" type="text" x-model="target_value" name="hour[target_value]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ $hour->target_value }}"/>
                                        </div>
                                        
                                        <div class="py-1">
                                            <span class="px-1 font-sans font-bold text-gray-600">家賃</span>
                                            <input placeholder="家賃" type="text" x-model="rent" name="hour[rent]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ $hour->rent }}"/>
                                        </div>
                                        
                                        <div class="py-1">
                                            <span class="px-1 font-sans font-bold text-gray-600">水道代</span>
                                            <input placeholder="水道代" type="text" x-model="water_cost" name="hour[water_cost]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ $hour->water_cost }}"/>
                                        </div>
                                        
                                        <div class="py-1">
                                            <span class="px-1 font-sans font-bold text-gray-600">光熱費</span>
                                            <input placeholder="光熱費" type="text" x-model="utilitiy_cost" name="hour[utilitiy_cost]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ $hour->utilitiy_cost }}"/>
                                        </div>
                                        
                                        <div class="py-1">
                                            <span class="px-1 font-sans font-bold text-gray-600">食費</span>
                                            <input placeholder="食費" type="text" x-model="food_cost" name="hour[food_cost]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ $hour->food_cost }}"/>
                                        </div>
                                        
                                        <div class="py-1">
                                            <span class="px-1 font-sans font-bold text-gray-600">通信費</span>
                                            <input placeholder="通信費" type="text" x-model="phone_cost" name="hour[phone_cost]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ $hour->phone_cost }}"/>
                                        </div>
                                        
                                        <div class="py-1">
                                            <span class="px-1 font-sans font-bold text-gray-600">その他</span>
                                            <input placeholder="その他" type="text" x-model="other_cost" name="hour[other_cost]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ $hour->other_cost }}"/>
                                        </div>
                                        
                                        <div class="py-1">
                                            <span class="px-1 font-sans font-bold text-gray-600">収入</span>
                                            <input placeholder="収入" type="text" x-model="income" name="hour[income]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ $hour->income }}"/>
                                        </div>
                                        
                                        <div class="py-1">
                                            <span class="px-1 font-sans font-bold text-gray-600">時給</span>
                                            <input placeholder="時給" type="text" x-model="hourly_wage" name="hour[hourly_wage]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ $hour->hourly_wage }}"/>
                                        </div>
                                        <input type="submit" value="保存" class="mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:text-white hover:bg-black"/>
                                    </div>
                                </form>
                                <div class="footer">
                                    <a href="/" class="flex items-center justify-center mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-1 py-3 block shadow-xl hover:text-white hover:bg-black">戻る</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </body>
</x-app-layout>
