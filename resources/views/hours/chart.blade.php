<x-app-layout>
    <body>
        <div class="pt-8">
            <div class="mx-16">
                <table class="w-full border-collapse text-sm text-gray-500 bg-white shadow-md 
                rounded-lg">
                  　<thead class="">
                    <tr>
                      　<th scope="col" class="px-2 py-6 text-center font-sans text-gray-900">
                      　    2023年</th>
                    </tr>
                    </thead>
                    <tbody class="border-t border-gray-100">
                        <tr>
                          　<td class="px-6 pb-9 pt-12 text-gray-600">
                                <h1 class="text-center font-sans font-bold text-2xl text-gray-500 
                                pb-8">働かずに自由に使えた時間</h1>
                                <div class="flex items-center justify-center font-sans font-bold 
                                text-gray-900 pt-26">
                                    <div class="w-2/3">
                                        <canvas id="chart"/>
                                    </div>
                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                    <script>
                                        var ctx = document.getElementById('chart').getContext('2d');
                                        var chart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                datasets: [{
                                                    label: '自由に使えた時間',
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
                      　     </td>
                        </tr>
                  　</tbody>
                </table>
            </div>
        </div>
    </body>
</x-app-layout>
