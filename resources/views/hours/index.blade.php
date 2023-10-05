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
            <a href='hours/create'>作成</a>
        </div>
        <div>
            <a href='/hours/create'>働かずに自由に使えた時間の登録</a>
        </div>
        <div class="hours">
            @foreach ($hours as $hour)
                <div class="year&month">
                    <a href="">{{ $hour->year->year }}</a>
                    <a href="">{{ $hour->month->month }}</a>
                </div>
                <div class 'hour'>
                    <div class="total_cost">
                        <h2>生活費</h2>
                        <a href="/hours/{{ $hour->id }}">{{ $hour->total_cost }}円</a>
                    </div>
                    <div class="amount">
                        <h2>働かずに自由に使えた時間</h2>
                        <a href="/hours/{{ $hour->id }}">{{ $hour->amount }}時間</a>
                    </div>
                </div>
                <form action="/hours/{{ $hour->id }}" id="form_{{ $hour->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deleteHour({{ $hour->id }})">削除</button>
                </form>
                <div class="edit">
                    <a href="/hours/{{ $hour->id }}/edit">編集</a>
                </div>
            @endforeach
        </div>
        <div>
        <script>
            function deleteHour(id) {
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
