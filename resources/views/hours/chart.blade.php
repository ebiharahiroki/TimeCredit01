<x-app-layout>
    <x-slot name="header">
        グラフ
    </x-slot>
    <body>
        {{ $year }}
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="紹介文のテキスト" data-hashtags="タグ1,タグ2,タグ3" data-show-count="false">Tweet</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <!--    <div>-->
    <!--        <canvas id="myChart"></canvas>-->
    <!--    </div>-->
        <!--<script src="./time/resources/js/chartjs.js"></script>-->
        <div style="width: 50%">
            <canvas id="chart"></canvas>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('chart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    datasets: [{
                        label: '働かずに自由に使えた時間',
                        data: @json($array),
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </body>
</x-app-layout>
