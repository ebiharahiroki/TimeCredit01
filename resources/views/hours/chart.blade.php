<x-app-layout>
    <body>
        <div class="pt-10">
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
          <thead class="bg-white">
            <tr>
              <th scope="col" class="px-2 py-6 text-center font-sans text-gray-900">2023年</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-8 text-gray-600">
        <div class="flex items-center justify-center font-sans font-bold text-gray-900 pt-26">
        <div style="width: 65%">
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
                  
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      </div>
    </body>
</x-app-layout>
