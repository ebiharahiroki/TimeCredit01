<x-app-layout>
    <x-slot name="header">
        合計
    </x-slot>
    <body>
        <h1>生活費</h1>
            <div class="total_cost">
                @foreach ($costs as $cost)
                <h2 class='rent'>{{ $cost->rent }}</h2>
            </div>
    </body>
</x-app-layout>