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
        </div>
        <div>
            <a href='/hours/createHour'>貯められた時間の登録</a>
        </div>
        <div>
            <table>
                <tr>
                    <td class="border border-black">
                        <div><a href="january" data-month=1>1月</a></div>
                    </td>
                    <td class="border border-black">
                        <div><a href="february" data-month=2>2月</a></div>
                    </td>
                    <td class="border border-black">
                        <div><a href="march" data-month=3>3月</a></div>
                    </td>
                    <td>
                        <div><a href="april" data-month=4>4月</a></div>
                    </td>
                    <td>
                        <div><a href="may" data-month=5>5月</a></div>
                    </td>
                    <td>
                        <div><a href="june" data-month=6>6月</a></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div><a href="july" data-month=7>7月</a></div>
                    </td>
                    <td>
                        <div><a href="august" data-month=8>8月</a></div>
                    </td>
                    <td>
                        <div><a href="september" data-month=9>9月</a></div>
                    </td>
                    <td>
                        <div><a href="october" data-month=10>10月</a></div>
                    </td>
                    <td>
                        <div><a href="november" data-month=11>11月</a></div>
                    </td>
                    <td>
                        <div><a href="december" data-month=12>12月</a></div>
                    </td>
                </tr>
            </table>
        </div>
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
        <div>
            <h2>時間</h2>
        </div>
        <div class="hours">
            @foreach ($hours as $hour)
                <div class 'hour'>
                    <h2 class="current_cost">
                        <a href="/hours/{{ $hour->id }}">{{ $hour->current_cost }}</a>
                    </h2>
                    <h2 class="current_cost">
                        <a href="/hours/{{ $hour->id }}">{{ $hour->amount }}</a>
                    </h2>
                </div>
                <form action="/hours/{{ $hour->id }}" id="form_{{ $hour->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deleteCost({{ $hour->id }})">削除</button>
                </form>
                <div class="edit">
                    <a href="/costs/{{ $hour->id }}/edit">編集</a>
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
