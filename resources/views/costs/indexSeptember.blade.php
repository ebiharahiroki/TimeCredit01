<x-app-layout>
    <x-slot name="header">
        一覧
    </x-slot>
    <body>
        <div class="font-sans">
        <div class="font-bold">
        <div class="text-xl"> 
        <div class="bg-gradient-to-b"> 
        <div>
            <a href='costs/create_cost'>生活費の登録</a>
        <div class="costs">
            @foreach ($costs as $cost)
                <div class 'cost'>
                    <h2 class="total_cost">
                        <a href="/costs/{{ $cost->id }}">{{ $cost->total_cost }}</a>
                    </h2>
                </div>
                <form action="/costs/{{ $cost->id }}" id="form_{{ $cost->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deleteCost({{ $cost->id }})">削除</button>
                </form>
                <div class="edit">
                    <a href="/costs/{{ $cost->id }}/edit">編集</a>
                </div>
            @endforeach
        </div>
        <script>
            function deleteCost(id) {
                'use strict'
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        </div>
        </div>
        </div>
        </div>
    </body>
</x-app-layout>
