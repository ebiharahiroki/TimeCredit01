<x-app-layout>
    <body>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
        <div class="container max-w-full mx-auto md:py-6 px-6">
          <div class="max-w-sm mx-auto px-6">
                <div class="relative flex flex-wrap">
                    <div class="w-full relative">
                        <div class="md:mt-6">
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
                                    
                                    <!--<div class="flex justify-start mt-3 ml-4 p-1">-->
                                    <!--    <ul>-->
                                    <!--        <li class="flex items-center py-1">-->
                                    <!--            <div :class="{'bg-green-200 text-green-700': password == password_confirm && password.length > 0, 'bg-red-200 text-red-700':password != password_confirm || password.length == 0}"-->
                                    <!--                 class=" rounded-full p-1 fill-current ">-->
                                    <!--                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
                                    <!--                    <path x-show="password == password_confirm && password.length > 0" stroke-linecap="round"-->
                                    <!--                          stroke-linejoin="round" stroke-width="2"-->
                                    <!--                          d="M5 13l4 4L19 7"/>-->
                                    <!--                    <path x-show="password != password_confirm || password.length == 0" stroke-linecap="round"-->
                                    <!--                          stroke-linejoin="round" stroke-width="2"-->
                                    <!--                          d="M6 18L18 6M6 6l12 12"/>-->
        
                                    <!--                </svg>-->
                                    <!--            </div>-->
                                    <!--            <span :class="{'text-green-700': password == password_confirm && password.length > 0, 'text-red-700':password != password_confirm || password.length == 0}"-->
                                    <!--                  class="font-medium text-sm ml-3"-->
                                    <!--                  x-text="password == password_confirm && password.length > 0 ? 'Passwords match' : 'Passwords do not match' "></span>-->
                                    <!--        </li>-->
                                    <!--        <li class="flex items-center py-1">-->
                                    <!--            <div :class="{'bg-green-200 text-green-700': password.length > 7, 'bg-red-200 text-red-700':password.length < 7 }"-->
                                    <!--                 class=" rounded-full p-1 fill-current ">-->
                                    <!--                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
                                    <!--                    <path x-show="password.length > 7" stroke-linecap="round"-->
                                    <!--                          stroke-linejoin="round" stroke-width="2"-->
                                    <!--                          d="M5 13l4 4L19 7"/>-->
                                    <!--                    <path x-show="password.length < 7" stroke-linecap="round"-->
                                    <!--                          stroke-linejoin="round" stroke-width="2"-->
                                    <!--                          d="M6 18L18 6M6 6l12 12"/>-->
        
                                    <!--                </svg>-->
                                    <!--            </div>-->
                                    <!--            <span :class="{'text-green-700': password.length > 7, 'text-red-700':password.length < 7 }"-->
                                    <!--                  class="font-medium text-sm ml-3"-->
                                    <!--                  x-text="password.length > 7 ? 'The minimum length is reached' : 'At least 8 characters required' "></span>-->
                                    <!--        </li>-->
                                    <!--    </ul>-->
                                    <!--</div>-->
                                    <!--<div class="flex justify-start">-->
                                    <!--    <label class="block text-gray-500 font-bold my-4 flex items-center">-->
                                    <!--        <input class="leading-loose text-pink-600 top-0" type="checkbox"/>-->
                                    <!--        <span class="ml-2 text-sm py-2 text-gray-600 text-left">Accept the-->
                                    <!--              <a href="#"-->
                                    <!--                 class="font-semibold text-black border-b-2 border-gray-200 hover:border-gray-500">-->
                                    <!--               Terms and Conditions of the site-->
                                    <!--              </a>and-->
                                    <!--              <a href="#"-->
                                    <!--                 class="font-semibold text-black border-b-2 border-gray-200 hover:border-gray-500">-->
                                    <!--                the information data policy.</a>-->
                                    <!--        </span>-->
                                    <!--    </label>-->
                                    <!--</div>-->
                                </div>
                            <div class="footer">
                                <a href="/" class="flex items-center justify-center mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-1 py-3 block shadow-xl hover:text-white hover:bg-black">戻る</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>
