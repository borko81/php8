<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php

        $capitals = [
            'Japan' => 'Tokyo',
            'France' => 'Paris',
            'Germany' => 'Berlin',
            'United Kingdom' => 'London',
            'United States' => 'Washington D.C.'
        ];

        $scores = [1, 2, 3];
        echo join(" ", $scores);
        echo "<br />";
        unset($scores[0]);
        echo count($scores);

        echo "<br />";
        echo array_key_exists('France', $capitals);
        echo "<br />";

        foreach($capitals as $k => $v) {
            echo "$k has $v <br />";
        }

    ?>
</body>
</html>