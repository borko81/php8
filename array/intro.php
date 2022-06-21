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

        $arr = range(1, 10, 1);
        var_dump($arr);

        $NS['server'] = 'localhost';
        $NS['user'] = 'root';
        $NS['password'] = 'secret';

        foreach($NS as $k=>$v) {
            echo "<i style='text-decoration:underline;'>$k</i> has <strong>$v</strong> for parameter<br>";
        }

    ?>
</body>
</html>