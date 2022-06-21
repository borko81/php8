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
        echo ceil(2.44);
        echo "<br />";
        echo floor(2.54);
        echo "<br />";
        echo round(5.055, 2);
        echo "<br />";
        echo min(3.13, 10, 2.11, 2);
        echo "<br />";

        // check for number
        $array_with_numbers = array("123", 344, 1);
        $array_with_numbers[] = '222';
        
        foreach ($array_with_numbers as $n) {
            if (!is_numeric($n)) {
                die("Found not numeric number!");
            } 
        }
        echo "Array looked good";
        
        echo "<br />";

    ?>
</body>
</html>