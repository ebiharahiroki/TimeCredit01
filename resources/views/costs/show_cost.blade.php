<x-app-layout>
    <x-slot name="header">
        詳細
    </x-slot>
    <body>
        <h1>生活費</h1>
        <div class="costs">
            <h2>家賃</h2>
            <h2 class="rent">{{ $cost->rent }}</h2>
            <h2>水道代</h2>
            <h2 class="water_cost">{{ $cost->water_cost }}</h2>
            <h2>光熱費</h2>
            <h2 class="utilitiy_cost">{{ $cost->utilitiy_cost }}</h2>
            <h2>食費</h2>
            <h2 class="food_cost">{{ $cost->food_cost }}</h2>
            <h2>通信費</h2>
            <h2 class="phone_cost">{{ $cost->phone_cost }}</h2>
            <h2>その他</h2>
            <h2 class="other_cost">{{ $cost->other_cost }}</h2>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>