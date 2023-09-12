<x-app-layout>
    <x-slot name="header">
        作成
    </x-slot>
    <body>
        <form action="/costs" method="POST">
            @csrf
            <div class="rent">
                <input type="text" name="cost[rent]" placeholder="家賃" value="{{ old('cost.rent') }}"/>
                <p class="rent__error" style="color:red">{{ $errors->first('cost.rent') }}</p>
            </div>
            <div class="water_cost">
                <input type="text" name="cost[water_cost]" placeholder="水道代" value="{{ old('cost.water_cost') }}"/>
                <p class="water_cost__error" style="color:red">{{ $errors->first('cost.water_cost') }}</p>
            </div>
            <div class="utilitiy_cost">
                <input type="text" name="cost[utilitiy_cost]" placeholder="光熱費" value="{{ old('cost.utilitiy_cost') }}"/>
                <p class="utilitiy_cost__error" style="color:red">{{ $errors->first('cost.utilitiy_cost') }}</p>
            </div>
            <div class="food_cost">
                <input type="text" name="cost[food_cost]" placeholder="食費" value="{{ old('cost.food_cost') }}"/>
                <p class="food_cost__error" style="color:red">{{ $errors->first('cost.food_cost') }}</p>
            </div>
            <div class="phone_cost">
                <input type="text" name="cost[phone_cost]" placeholder="通信費" value="{{ old('cost.phone_cost') }}"/>
                <p class="phone_cost__error" style="color:red">{{ $errors->first('cost.phone_cost') }}</p>
            </div>
            <div class="other_cost">
                <input type="text" name="cost[other_cost]" placeholder="その他" value="{{ old('cost.other_cost') }}"/>
                <p class="other_cost__error" style="color:red">{{ $errors->first('cost.other_cost') }}</p>
            </div>
            <input type="submit" value="保存"/>
            <a href='costs/total_cost'>合計</a>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <h2>ログインユーザー：{{ Auth::user()->name }}</h2>
    </body>
</x-app-layout>
