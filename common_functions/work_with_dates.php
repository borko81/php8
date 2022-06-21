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
        date_default_timezone_set("Europe/Sofia");

        echo time();
        echo "<br />";
        echo date("d.m.Y");
        echo "<br />";
        echo date("F");
        echo "<br />";
        // Diff date
        $datetime = new DateTime('2022-06-21 00:00:00');
        $interval = new DateInterval('P1D');
        $datetime->add($interval);
        echo $datetime->format("d.m.Y");
        echo "<br />";
        $today = new DateTime();
        echo $today->format("d.m.Y H:i");

        // random number's
        echo "<br />";

        for ($i=0; $i<=10; $i++) {
            echo $i . "-" . rand(1, 9) . "<br/>";
        }

    ?>
</body>
</html>