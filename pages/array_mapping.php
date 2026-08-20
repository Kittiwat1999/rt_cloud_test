<?php
$arr1 = array(
    array("code" => '101', "name" => "AAA"),
    array("code" => '102', "name" => "BBB"),
    array("code" => '103', "name" => "CCC")
);

$arr2 = array(
    array("code" => '101', "city" => "Bankok"),
    array("code" => '102', "city" => "Tokyo"),
    array("code" => '103', "city" => "Singapore")
);

$mapped1 = [];
foreach ($arr1 as $arr) {
    $mapped1[$arr["code"]] = $arr["name"];
}

$result = [];
foreach ($arr2 as $arr) {
    $result[] = [
        "code" => $arr["code"],
        "name" => $mapped1[$arr["code"]],
        "city" => $arr["city"]
    ];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array mapping</title>
</head>

<body>
    <h3>Array 1</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($arr1 as $arr) {
                echo "<tr>";
                echo "<td>" . $arr["code"] . "</td>";
                echo "<td>" . $arr["name"] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <h3>Array 2</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Code</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($arr2 as $arr) {
                echo "<tr>";
                echo "<td>" . $arr["code"] . "</td>";
                echo "<td>" . $arr["city"] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <h3>Result</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $res) {
                echo "<tr>";
                echo "<td>" . $res["code"] . "</td>";
                echo "<td>" . $res["name"] . "</td>";
                echo "<td>" . $res["city"] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>