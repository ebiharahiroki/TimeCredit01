<x-app-layout>
    <body>
        <div class="text-center px-1 font-sans font-bold text-gray-900 pt-20">
            {{ $year }}
         <form action="/twitter/login" method="post">
             @csrf
            <input type="submit" value="Tweet">
        </form>
        </div>
        <!--<a href="/twitter/login" class="twitter-share-button">Tweet</a>-->
        <div class="flex items-center justify-center font-sans font-bold text-gray-900 pt-26">
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
        </div>
    </body>
</x-app-layout>
