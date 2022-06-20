<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $numbers = [1, 2, 3, 4, 5];
        
        function odd_number($numbers) {
            $odd = [];
            foreach ($numbers as $num) {
                if ($num % 2 == 1) {
                    $odd[] = $num;
                }
            }
            return $odd;
        }

        function even_numer($numbers) {
            $odd = odd_number($numbers);
            $even = [];

            foreach ($numbers as $num) {
                if (!in_array($num, $odd)) {
                    $even[] = $num;
                }
            }
            return $even;
        }

        $filtered_array = array_filter($numbers, function ($n) {
            return $n % 2 == 1;
        });

        var_dump(even_numer($numbers));
        echo "<br />";
        var_dump($filtered_array);

        // Arrow function work from version 7.4
        $arrow_odd = array_filter(
            $numbers,
            fn ($num) => $num % 2 == 1
        );
        echo "<br />";
        var_dump($arrow_odd);

        // Reduce
        $total = array_reduce(
            $numbers,
            fn ($prev, $cur) => $prev + $cur
        );
        echo "<br />";
        echo $total;
    ?>
</body>
</html>