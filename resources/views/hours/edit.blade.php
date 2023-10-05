<x-app-layout>
    <x-slot name="header">
        編集
    </x-slot>
    <body>
        <div class="content">
        <form action="/hours/{{ $hour->id }}" method="POST">
            @csrf
            @method('PUT')
            <h2 class="year">{{ $hour->year->year }}</h2>
            <h2 class="month">{{ $hour->month->month }}</h2>
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
            <div><h2>生活費</h2></div>
            <div class="content_rent">
                <h2>家賃</h2>
                <input type="text" name="hour[rent]" placeholder="家賃" value="{{ $hour->rent }}"/>
            </div>
            <div class="content_water_cost">
                <h2>水道代</h2>
                <input type="text" name="hour[water_cost]" placeholder="水道代" value="{{ $hour->water_cost }}"/>
            </div>
            <div class="content_utilitiy_cost">
                <h2>光熱費</h2>
                <input type="text" name="hour[utilitiy_cost]" placeholder="光熱費" value="{{ $hour->utilitiy_cost }}"/>
            </div>
            <div class="content_food_cost">
                <h2>食費</h2>
                <input type="text" name="hour[food_cost]" placeholder="食費" value="{{ $hour->food_cost }}"/>
            </div>
            <div class="content_phone_cost">
                <h2>通信費</h2>
                <input type="text" name="hour[phone_cost]" placeholder="通信費" value="{{ $hour->phone_cost }}"/>
            </div>
            <div class="content_other_cost">
                <h2>その他</h2>
                <input type="text" name="hour[other_cost]" placeholder="その他" value="{{ $hour->other_cost }}"/>
            </div>
            <div class="income">
                <h2>収入</h2>
                <input type="text" name="hour[income]" placeholder="収入" value="{{ $hour->income }}"/>
            </div>
            <div class="hourly_wage">
                <h2>時給</h2>
                <input type="text" name="hour[hourly_wage]" placeholder="時給" value="{{ $hour->hourly_wage }}"/>
            </div>
            <input type="submit" value="更新"/>
        </form>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>
