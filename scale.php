<?php
$input = readline();
$input_values = explode(' ', $input);

$max_weight_value = max($input_values[1], $input_values[0]);
$min__weight_value = min($input_values[1], $input_values[0]);
$weight_difference = $max_weight_value - $min__weight_value;
$balance_weights = explode(',', $input_values[2]);


if ($input_values[0] == $input_values[1])
{
    $response = 'In balans';
}
else
{
    foreach ($balance_weights as $balance_weight)
    {
        if ($weight_difference >= $balance_weight)
        {
            $weight_list[ ] = $balance_weight;
            $weight_difference -= $balance_weight;
        }
    }
    if ($weight_difference !== 0)
    {
        $response = 'Not balanced';
    }
}

if (isset($response)) {
    echo $response;
} else {
    foreach ($weight_list as $response_weights => $response_weight)
    {
        echo $response_weight . ' ';
    }
}