<x-app-layout>
    <x-slot name="header">
        時間
    </x-slot>
    <body>
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
            <div class="hourly_wtarget_value">
                <input type="text" name="hour[hourly_wtarget_value]" placeholder="時給" value="{{ old('hour.hourly_wtarget_value') }}"/>
                <p class="hourly_wtarget_value__error" style="color:red">{{ $errors->first('hour.hourly_wtarget_value') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>