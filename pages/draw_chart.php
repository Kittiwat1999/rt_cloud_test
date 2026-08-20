<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw chart form API</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .flex-container {
            max-width: 100%;
            display: flex;
            flex-direction: row;
        }

        .flex-item {
            background-color: #f1f1f1;
            padding: 10px;
            font-size: 30px;
            text-align: center;
            width: 100%;
            border: solid 5px #000;
        }

        @media (max-width: 600px) {
            .flex-container {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <canvas id="barChart"></canvas>
        </div>
        <div class="flex-item">
            <canvas id="pieChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        function getRandomColor() {
            let min = 0;
            let max = 255;
            return `${getRandomInteger(min, max)},${getRandomInteger(min, max)},${getRandomInteger(min, max)}`
        }

        function getRandomInteger(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        $.ajax({
            url: 'https://www.trcloud.co/test/api.php',
            dataType: 'json',
            type: "post",
            success: function(res) {
                let labels = [];
                let data = [];
                let backgrounds = [];
                let borders = [];

                $.each(res, function(index, item) {
                    labels.push(item.City);
                    data.push(item.Population);
                    color = getRandomColor()
                    backgrounds.push(`rgba(${color}, 0.2)`);
                    borders.push(`rgba(${color}, 1)`);
                });

                const barChart = document.getElementById('barChart');
                const pieChart = document.getElementById('pieChart');

                new Chart(barChart, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: '# of Votes',
                            data: data,
                            backgroundColor: backgrounds,
                            borderColor: borders,
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

                new Chart(pieChart, {
                    type: 'pie',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: '# of Votes',
                            data: data,
                            backgroundColor: backgrounds,
                            borderColor: borders,
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
            }
        })
    </script>
</body>

</html>