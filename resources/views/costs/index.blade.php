<x-app-layout>
    <x-slot name="header">
        一覧
    </x-slot>
    <body>
        <h1>生活費</h1>
        <div><a href='costs/create_cost'>作成</a></div>
        <div class="costs">
            @foreach ($costs as $cost)
                <div class 'cost'>
                    <h2 class="total_cost">
                        <a href="/costs/{{ $cost->id }}">{{ $cost->total_cost }}</a>
                    </h2>
                    <div class="costs">
                    <h2 class="rent">$posts</h2>
                    <h2 class="water_cost">{{ $cost->water_cost }}</h2>
                    <h2 class="utilitiy_cost">{{ $cost->utilitiy_cost }}</h2>
                    <h2 class="food_cost">{{ $cost->food_cost }}</h2>
                    <h2 class="phone_cost">{{ $cost->phone_cost }}</h2>
                    <h2 class="other_cost">{{ $cost->other_cost }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
        </form>
        <form action="/costs/{{ $cost->id }}" id="form_{{ $cost->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deleteCost({{ $cost->id }})">delete</button>
        </form>
        <div class="edit">
            <a href="/costs/{{ $cost->id }}/edit">編集</a>
        </div>
        <script>
            function deleteCost(id) {
                'use strict'
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</x-app-layout>