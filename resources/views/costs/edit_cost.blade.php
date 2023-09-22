<x-app-layout>
    <x-slot name="header">
        編集
    </x-slot>
    <body>
        <h1>生活費編集</h1>
        <div class="content">
        <form action="/costs/{{ $cost->id }}" method="POST">
            @csrf
            @method('PUT')
            <div><h2>生活費</h2></div>
            <div class="content_rent">
                <h2>家賃</h2>
                <input type="text" name="cost[rent]" placeholder="家賃" value="{{ $cost->rent }}"/>
            </div>
            <div class="content_water_cost">
                <h2>水道代</h2>
                <input type="text" name="cost[water_cost]" placeholder="水道代" value="{{ $cost->water_cost }}"/>
            </div>
            <div class="content_utilitiy_cost">
                <h2>光熱費</h2>
                <input type="text" name="cost[utilitiy_cost]" placeholder="光熱費" value="{{ $cost->utilitiy_cost }}"/>
            </div>
            <div class="content_food_cost">
                <h2>食費</h2>
                <input type="text" name="cost[food_cost]" placeholder="食費" value="{{ $cost->food_cost }}"/>
            </div>
            <div class="content_phone_cost">
                <h2>通信費</h2>
                <input type="text" name="cost[phone_cost]" placeholder="通信費" value="{{ $cost->phone_cost }}"/>
            </div>
            <div class="content_other_cost">
                <h2>その他</h2>
                <input type="text" name="cost[other_cost]" placeholder="その他" value="{{ $cost->other_cost }}"/>
            </div>
            <div><h2>貯められた時間</h2></div>
            <div class="current_cost">
                <input type="text" name="hour[current_cost]" placeholder="生活費" value="{{ $cost->total_cost }}"/>
            </div>
            <div class="income">
                <input type="text" name="hour[income]" placeholder="収入"/>
            </div>
            <div class="hourly_wage">
                <input type="text" name="hour[hourly_wage]" placeholder="時給"/>
            </div>
            <div class="amount">
                <input type="text" name="hour[amount]" placeholder="貯められた時間"/>
            </div>
            <input type="submit" value="更新"/>
        </form>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>
