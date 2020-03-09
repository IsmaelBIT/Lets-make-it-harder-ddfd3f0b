<?php
unset($argv[0]);
$max_weight_value = max($argv[1], $argv[2]);
$min_weight_value = min($argv[2], $argv[1]);
$weight_difference = $max_weight_value - $min_weight_value;
$balance_weights = explode(',', $argv[3]);
arsort($balance_weights);

if ($argv[1] == $argv[2]) {
    $response = 'In balans';
}
else
{
    foreach ($balance_weights as $balance_weight)
    {
        if ($weight_difference >= $balance_weight) {
            $weight_list[] = $balance_weight;
            $weight_difference -= $balance_weight;
        }
    }
    if ($weight_difference !== 0) {
        $response = 'Not balanced';
    }
}

if (isset($response)) {
    echo $response;
} else {
    echo implode(", ", $weight_list) . "\n";
}