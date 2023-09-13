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
            <div class="content_rent">
                <input type="text" name="cost[rent]" placeholder="家賃" value="{{ $cost->rent }}"/>
            </div>
            <div class="content_water_cost">
                <input type="text" name="cost[water_cost]" placeholder="水道代" value="{{ $cost->water_cost }}"/>
            </div>
            <div class="content_utilitiy_cost">
                <input type="text" name="cost[utilitiy_cost]" placeholder="光熱費" value="{{ $cost->utilitiy_cost }}"/>
            </div>
            <div class="content_food_cost">
                <input type="text" name="cost[food_cost]" placeholder="食費" value="{{ $cost->food_cost }}"/>
            </div>
            <div class="content_phone_cost">
                <input type="text" name="cost[phone_cost]" placeholder="通信費" value="{{ $cost->phone_cost }}"/>
            </div>
            <div class="content_other_cost">
                <input type="text" name="cost[other_cost]" placeholder="その他" value="{{ $cost->other_cost }}"/>
            </div>
            <input type="submit" value="保存"/>
            <a href='costs/total_cost'>合計</a>
        </form>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>