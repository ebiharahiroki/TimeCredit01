<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>生活費</h1>
        <form action="/costs" method="POST">
            @csrf
            <div class="rent">
                <input type="text" name="post[rent]" placeholder="家賃"/>
            </div>
            <div class="water_cost">
                <input type="text" name="post[water_cost]" placeholder="水道代"/>
            </div>
            <div class="utilitiy_cost">
                <input type="text" name="post[utilitiy_cost]" placeholder="光熱費"/>
            </div>
            <div class="food_cost">
                <input type="text" name="post[food_cost]" placeholder="食費"/>
            </div>
            <div class="phone_cost">
                <input type="text" name="post[phone_cost]" placeholder="通信費"/>
            </div>
            <div class="other_cost">
                <input type="text" name="post[other_cost]" placeholder="その他"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
    </body>
</html>