<x-app-layout>
    <body>
        <div class="flex basis-3/5 bg-white rounded-lg shadow-xl m-4">
            <div class="mx-auto my-5">
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
    </body>
</x-app-layout>
