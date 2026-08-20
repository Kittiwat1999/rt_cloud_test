<?php
include_once('./includes/env.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            outline-color: var(--color-primary);
            outline-width: 1px;
        }

        .center-box {
            width: 100%;
            max-width: 840px;
            margin: 0 auto;
            overflow-wrap: break-word;
        }

        table {
            min-width: 100px;
            max-width: 100%
        }

        table thead {
            background-color: #f8f8f8;
            font-weight: 500
        }

        table tr td,
        th {
            padding: 3px;
        }
    </style>
</head>

<body>
    <div class="center-box">
        <h1>ส่งข้อสอบ Junior ERP</h1>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>ข้อ</th>
                    <th>รายละเอียด</th>
                    <th>-</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <p><span>Create a web app that output a triangle of '*' depending on the user input integer:</span></p>
                        <ul>
                            <li><span>For even numbers, a head-up triangle.</span></li>
                            <li><span>For odd numbers, an upside-down triangle.</span></li>
                        </ul>
                    </td>
                    <td>
                        <a href="<?= APP_URL ?>/pages/draw_triangle.php" target="_blank" rel="draw triangle">
                            <button type="button">เรียกดู</button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <p><span>Create a web app which can calculate the ratios from a user input number:</span></p>
                        <ul>
                            <li><span>User input a number in one of the five input fields.</span></li>
                            <li><span>The app calculates the values for the other four fields according to the number given on the top.</span></li>
                            <li><span>There must be a button to clear all fields.</span></li>
                        </ul>
                    </td>
                    <td>
                        <a href="<?= APP_URL ?>/pages/calculate_ratio.php" target="_blank" rel="draw triangle">
                            <button type="button">เรียกดู</button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        <p><span>Write a code that performs the array MAPPING function similar to VLOOKUP where the input arrays are 'Array1' and 'Array2' returning 'Output' array.</span></p>
                    </td>
                    <td>
                        <a href="<?= APP_URL ?>/pages/array_mapping.php" target="_blank" rel="draw triangle">
                            <button type="button">เรียกดู</button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        <p><span>Use any JS library to display a bar chart and a pie chart from the data retrieved from</span> <span style="font-weight: 400;"><a href="https://www.trcloud.co/test/api.php">https://www.trcloud.co/test/api.php</a> through an AJAX call.</span></p>
                    </td>
                    <td>
                        <a href="<?= APP_URL ?>/pages/draw_chart.php" target="_blank" rel="draw triangle">
                            <button type="button">เรียกดู</button>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>