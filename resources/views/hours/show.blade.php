<x-app-layout>
    <x-slot name="header">
        詳細
    </x-slot>
    <body>
        <h1>生活費</h1>
        <div class="hours">
            <h2>家賃</h2>
            <h2 class="rent">{{ $hour->rent }}</h2>
            <h2>水道代</h2>
            <h2 class="water_cost">{{ $hour->water_cost }}</h2>
            <h2>光熱費</h2>
            <h2 class="utilitiy_cost">{{ $hour->utilitiy_cost }}</h2>
            <h2>食費</h2>
            <h2 class="food_cost">{{ $hour->food_cost }}</h2>
            <h2>通信費</h2>
            <h2 class="phone_cost">{{ $hour->phone_cost }}</h2>
            <h2>その他</h2>
            <h2 class="other_cost">{{ $hour->other_cost }}</h2>
            <h2>合計</h2>
            <h2 class="total_cost">{{ $hour->total_cost }}</h2>
            <h2>収入</h2>
            <h2 class="income">{{ $hour->income }}</h2>
            <h2>時給</h2>
            <h2 class="hourly_wage">{{ $hour->hourly_wage }}</h2>
            <h2>貯められた時間</h2>
            <h2 class="amount">{{ $hour->amount }}</h2>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>
