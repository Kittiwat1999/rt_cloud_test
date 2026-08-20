<?php
include_once('../includes/env.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Ratio</title>
    <style>
        table {
            min-width: 100px;
            max-width: 100%
        }

        table thead {
            background-color: #f8f8f8;
            font-weight: 500
        }

        table tr th {
            padding-right: 50px;
            padding-left: 50px;
        }

        table tr th {
            padding-right: 50px;
            padding-left: 50px;
        }
    </style>
</head>

<body>
    <form action="" method="get">
        <label for="">ผู้ใช้กรอกได้ 1 ช่อง</label>
        <table border="1">
            <thead>
                <tr>
                    <th>100</th>
                    <th>7</th>
                    <th>107</th>
                    <th>3</th>
                    <th>104</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" name="nums100" id="nums100" class="nums">
                    </td>
                    <td>
                        <input type="text" name="nums7" id="nums7" class="nums">
                    </td>
                    <td>
                        <input type="text" name="nums107" id="nums107" class="nums">
                    </td>
                    <td>
                        <input type="text" name="nums3" id="nums3" class="nums">
                    </td>
                    <td>
                        <input type="text" name="nums104" id="nums104" class="nums">
                    </td>
                </tr>
            </tbody>
        </table>
        <div style="margin-top: 10px;">
            <button id="buttonSubmit" type="button">go</button>
            <button id="buttonSubmit" type="clear">clear</button>
        </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $("#buttonSubmit").click(function() {
            let nums = {};

            $(".nums").map(function() {
                nums[this.name] = this.value;
            });

            let url = `<?php echo APP_URL ?>/server/calculate_ratio.php`;

            $.ajax({
                url: url,
                method: 'post',
                contentType: "application/json",
                data: JSON.stringify({
                    nums
                }),
                success: function(response) {
                    Object.entries(response).forEach(([key, value]) => {
                        $(`#${key}`).val(value)
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error:', status, error);
                }
            });
        });
    </script>
</body>

</html>