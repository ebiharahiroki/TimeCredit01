<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>時間</h1>
        <form action="/hours" method="POST">
            @csrf
            <div class="current_cost">
                <input type="text" name="post[current_cost]" placeholder="生活費"/>
            </div>
            <div class="income">
                <input type="text" name="post[income]" placeholder="収入"/>
            </div>
            <div class="hourly_wage">
                <input type="text" name="post[hourly_wage]" placeholder="時給"/>
            </div>
            <div class="amount">
                <input type="text" name="post[amount]" placeholder="貯まった時間"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
    </body>
</html>