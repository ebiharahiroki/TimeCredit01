import Chart from "chart.js/auto";
import axios from 'axios';

const ctx = document.getElementById("myChart").getContext("2d");
const myChart = new Chart(ctx, {
    type: "bar",
    data: {
        labels:["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
        datasets:[
            {
                label: "貯められた時間",
                borderColor: "rgb(75, 192, 192)",
                backgroundColor: "rgb(75, 192, 192, 0.5)",
            },
        ],
    },
});

axios
    .get("/getChart")
    .then((response) => {
        myChart.data.datasets[0].data = response.data;
        myChart.update();
    })
    .catch(() => {
        alert("失敗しました")
    });
