<?php
include_once('../includes/env.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw Triangle</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <form action="" method="get">
        <div>
            <label for="numberOfStar">number of star</label>
            <input type="text" name="numberOfStar" id="numberOfStar">
            <button id="buttonSubmit" type="button">go</button>
        </div>
    </form>
    <div id="displayStar"></div>
    <script>
        $("#buttonSubmit").click(function() {
            let numberOfStar = $("#numberOfStar").val();
            let url = `<?php echo APP_URL ?>/server/draw_triangle.php?number_of_star=${numberOfStar}`;
            let displayStar = $("#displayStar")
            $.get(url, function(data, status) {
                displayStar.html(data);
            });
        });
    </script>
</body>

</html>