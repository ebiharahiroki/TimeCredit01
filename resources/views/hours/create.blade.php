<x-app-layout>
        
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

<div class="container max-w-full mx-auto md:py-24 px-6">
  <div class="max-w-sm mx-auto px-6">
        <div class="relative flex flex-wrap">
            <div class="w-full relative">
                <div class="md:mt-6">
                    <form class="mt-8" x-data="{password: '',password_confirm: ''}">
                        <div class="mx-auto max-w-lg ">
                            <div class="target_value py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">＋αで欲しい自由時間</span>
                                <!--<input placeholder="" type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">-->
                                <input type="text" name="hour[target_value]"  class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ old('hour.target_value') }}"/>
                                <p class="target_value" style="color:red">{{ $errors->first('hour.target_value') }}</p>
                            </div>
                            
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">家賃</span>
                                <input type="text" name="hour[rent]"　placeholder="家賃"  class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ old('hour.rent') }}"/>
                <p class="rent__error" style="color:red">{{ $errors->first('hour.rent') }}</p>
                            </div>
                            
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">水道代</span>
                                <input placeholder="水道代" type="text" x-model="water_cost" name="hour[water_cost]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ old('hour.water_cost') }}"/>
                                <p class="water_cost__error" style="color:red">{{ $errors->first('hour.water_cost') }}</p>
                            </div>
                            
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">光熱費</span>
                                <input placeholder="光熱費" type="text" x-model="utilitiy_cost" name="hour[utilitiy_cost]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ old('hour.utilitiy_cost') }}"/>
                                <p class="utilitiy_cost__error" style="color:red">{{ $errors->first('hour.utilitiy_cost') }}</p>
                            </div>
                            
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">食費</span>
                                <input placeholder="食費" type="text" x-model="food_cost" name="hour[food_cost]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ old('hour.food_cost') }}"/>
                                <p class="food_cost__error" style="color:red">{{ $errors->first('hour.food_cost') }}</p>
                            </div>
                            
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">通信費</span>
                                <input placeholder="通信費" type="text" x-model="phone_cost" name="hour[phone_cost]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ old('hour.phone_cost') }}"/>
                                <p class="phone_cost__error" style="color:red">{{ $errors->first('hour.phone_hour') }}</p>
                            </div>
                            
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">その他</span>
                                <input placeholder="その他" type="text" x-model="other_cost" name="hour[other_cost]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ old('hour.other_cost') }}"/>
                                <p class="other_cost__error" style="color:red">{{ $errors->first('hour.other_cost') }}</p>
                            </div>
                            
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">収入</span>
                                <input placeholder="収入" type="text" x-model="income" name="hour[income]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ old('hour.income') }}"/>
                                <p class="income__error" style="color:red">{{ $errors->first('hour.income') }}</p>
                            </div>
                            
                            <div class="py-1">
                                <span class="px-1 font-sans font-bold text-gray-600">時給</span>
                                <input placeholder="時給" type="text" x-model="hourly_wage" name="hour[hourly_wage]" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" value="{{ old('hour.hourly_wage') }}"/>
                                <p class="hourly_wage__error" style="color:red">{{ $errors->first('hour.hourly_wage') }}</p>
                            </div>
                            
                            <div class="flex justify-start mt-3 ml-4 p-1">
                                <ul>
                                    <li class="flex items-center py-1">
                                        <div :class="{'bg-green-200 text-green-700': password == password_confirm && password.length > 0, 'bg-red-200 text-red-700':password != password_confirm || password.length == 0}"
                                             class=" rounded-full p-1 fill-current ">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path x-show="password == password_confirm && password.length > 0" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5 13l4 4L19 7"/>
                                                <path x-show="password != password_confirm || password.length == 0" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M6 18L18 6M6 6l12 12"/>

                                            </svg>
                                        </div>
                                        <span :class="{'text-green-700': password == password_confirm && password.length > 0, 'text-red-700':password != password_confirm || password.length == 0}"
                                              class="font-medium text-sm ml-3"
                                              x-text="password == password_confirm && password.length > 0 ? 'Passwords match' : 'Passwords do not match' "></span>
                                    </li>
                                    <li class="flex items-center py-1">
                                        <div :class="{'bg-green-200 text-green-700': password.length > 7, 'bg-red-200 text-red-700':password.length < 7 }"
                                             class=" rounded-full p-1 fill-current ">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path x-show="password.length > 7" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5 13l4 4L19 7"/>
                                                <path x-show="password.length < 7" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M6 18L18 6M6 6l12 12"/>

                                            </svg>
                                        </div>
                                        <span :class="{'text-green-700': password.length > 7, 'text-red-700':password.length < 7 }"
                                              class="font-medium text-sm ml-3"
                                              x-text="password.length > 7 ? 'The minimum length is reached' : 'At least 8 characters required' "></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="flex justify-start">
                                <label class="block text-gray-500 font-bold my-4 flex items-center">
                                    <input class="leading-loose text-pink-600 top-0" type="checkbox"/>
                                    <span class="ml-2 text-sm py-2 text-gray-600 text-left">Accept the
                                          <a href="#"
                                             class="font-semibold text-black border-b-2 border-gray-200 hover:border-gray-500">
                                           Terms and Conditions of the site
                                          </a>and
                                          <a href="#"
                                             class="font-semibold text-black border-b-2 border-gray-200 hover:border-gray-500">
                                            the information data policy.</a>
                                    </span>
                                </label>
                            </div>
                            <button class="mt-3 text-lg font-semibold
            bg-gray-800 w-full text-white rounded-lg
            px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                                Register
                            </button>
                        </div>
                    </form>

                    <div class="text-sm font-semibold block sm:hidden py-6 flex justify-center">
                        <a href="#"
                           class="text-black font-normal border-b-2 border-gray-200 hover:border-teal-500">You're already member?
                            <span class="text-black font-semibold">
            Login
          </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
        
        <h1>時間</h1>
        <form action="/hours/store" method="POST">
            @csrf
            <div><h2>生活費</h2></div>
            <div class="Year">
                <h2>Year</h2>
                <select name="hour[year_id]">
                    @foreach($years as $year)
                        <option value="{{ $year->id }}">{{ $year->year }}</option>
                    @endforeach
                </select>
            </div>
            <div class="Month">
                <h2>Month</h2>
                <select name="hour[month_id]">
                    @foreach($months as $month)
                        <option value="{{ $month->id }}">{{ $month->month }}</option>
                    @endforeach
                </select>
            </div>
            <div class="target_value">
                <input type="text" name="hour[target_value]" placeholder="＋αで欲しい自由時間" value="{{ old('hour.target_value') }}"/>
                <p class="target_value" style="color:red">{{ $errors->first('hour.target_value') }}</p>
            </div>
            <div class="rent">
                <input type="text" name="hour[rent]" placeholder="家賃" value="{{ old('hour.rent') }}"/>
                <p class="rent__error" style="color:red">{{ $errors->first('hour.rent') }}</p>
            </div>
            <div class="water_cost">
                <input type="text" name="hour[water_cost]" placeholder="水道代" value="{{ old('hour.water_cost') }}"/>
                <p class="water_cost__error" style="color:red">{{ $errors->first('hour.water_cost') }}</p>
            </div>
            <div class="utilitiy_cost">
                <input type="text" name="hour[utilitiy_cost]" placeholder="光熱費" value="{{ old('hour.utilitiy_cost') }}"/>
                <p class="utilitiy_cost__error" style="color:red">{{ $errors->first('hour.utilitiy_cost') }}</p>
            </div>
            <div class="food_cost">
                <input type="text" name="hour[food_cost]" placeholder="食費" value="{{ old('hour.food_cost') }}"/>
                <p class="food_cost__error" style="color:red">{{ $errors->first('hour.food_cost') }}</p>
            </div>
            <div class="phone_cost">
                <input type="text" name="hour[phone_cost]" placeholder="通信費" value="{{ old('hour.phone_cost') }}"/>
                <p class="phone_cost__error" style="color:red">{{ $errors->first('hour.phone_hour') }}</p>
            </div>
            <div class="other_cost">
                <input type="text" name="hour[other_cost]" placeholder="その他" value="{{ old('hour.other_cost') }}"/>
                <p class="other_cost__error" style="color:red">{{ $errors->first('hour.other_cost') }}</p>
            </div>
            <div><h2>貯められた時間</h2></div>
            <div class="income">
                <input type="text" name="hour[income]" placeholder="収入" value="{{ old('hour.income') }}"/>
                <p class="income__error" style="color:red">{{ $errors->first('hour.income') }}</p>
            </div>
            <div class="hourly_wage">
                <input type="text" name="hour[hourly_wage]" placeholder="時給" value="{{ old('hour.hourly_wage') }}"/>
                <p class="hourly_wage__error" style="color:red">{{ $errors->first('hour.hourly_wage') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>