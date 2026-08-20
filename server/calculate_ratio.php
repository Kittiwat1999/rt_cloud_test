<?php

header('Content-Type: application/json');
$input = json_decode(file_get_contents("php://input"), true);
$ratioToFind = array(100, 7, 107, 3, 104);

$find_input = array_filter($input['nums'], function ($value, $key) {
    return !empty($value);
}, ARRAY_FILTER_USE_BOTH);

$key = array_key_first($find_input);
$currntValue = (float) htmlspecialchars($find_input[$key]);
$currentRatio = (int) explode("nums", $key)[1];
$result = array($key => $currntValue);
for ($i = 0; $i < count($ratioToFind); $i++) 
{
    if ($ratioToFind[$i] == $currentRatio) continue;
    $result['nums' . $ratioToFind[$i]] = calculateRatio($currentRatio, $currntValue, $ratioToFind[$i]);
}

function calculateRatio(int $currentRatio, int $currntValue, int $findingRatio)
{
    $a100PercentOfValue = round($currntValue / ($currentRatio / 100));
    return round($a100PercentOfValue * ($findingRatio / 100), 2, PHP_ROUND_HALF_EVEN);
}

echo json_encode($result);
