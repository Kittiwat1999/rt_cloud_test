<?php
$numberOfStar = (int) htmlspecialchars($_GET['number_of_star']);
$result = array();

for($i = 1; $i <= $numberOfStar; $i++) 
{
    $result[] = str_repeat('*', $i);
}

if($numberOfStar % 2 != 0) 
{
    $result = array_reverse($result);    
}

echo implode("<br>", $result);