<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default parameters</title>
</head>
<body>
    
<?php

    function dump($data):void {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die;
    }

    function to_upper(string $value): string {
        return strtoupper($value);
    }

    function concat_parameters(string $param_one, string $param_two, $delimiter="=") : string {
        return to_upper($param_one) . $delimiter . to_upper($param_two);
    }

    function sum_of_two(int|float $a = 1, int|float $b = 2) : int|float {
        return $a + $b;
    }

    function sum_of_multipal() {
        $numbers = func_get_args();
        $total = 0;
        for ($i = 0; $i < count($numbers); $i++) {
            $total += $numbers[$i];
        }
        return $total;
    }

    echo concat_parameters('fname', 'lname');
    echo "<br />";
    //dump(concat_parameters('fname', 'lname'));
    echo sum_of_two(1, 2.5);
    echo "<br />";
    echo sum_of_multipal(1, 2, 3, 4, 5);


?>

</body>
</html>