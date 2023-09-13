<x-app-layout>
    <x-slot name="header">
        合計
    </x-slot>
    <body>
        <h1>生活費</h1>
            <div class="total_cost">
                <h2 class='total_cost'>{{ $cost->total_cost }}</h2>
            </div>
    </body>
</x-app-layout>