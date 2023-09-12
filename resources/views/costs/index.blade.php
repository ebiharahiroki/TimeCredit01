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