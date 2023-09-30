<x-app-layout>
    <x-slot name="header">
        グラフ
    </x-slot>
    <!--<body>-->
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
                labels: @json($labels),
                datasets: [{
                    label: '働かなくて良かった時間',
                    data: @json($data),
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
