<x-app-layout>
    <x-slot name="header">
        時間
    </x-slot>
    <body>
        <h1>時間</h1>
        <form action="/hours" method="POST">
            @csrf
            <div><h2>貯められた時間</h2></div>
            <div class="current_cost">
                <input type="text" name="hour[current_cost]" placeholder="生活費" value="{{ $hour->current_cost }}"/>
            </div>
            <div class="income">
                <input type="text" name="hour[income]" placeholder="収入" value="{{ $hour->income }}"/>
            </div>
            <div class="hourly_wage">
                <input type="text" name="hour[hourly_wage]" placeholder="時給" value="{{ $hour->hourly_wage }}"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
    </body>
</x-app-layout>