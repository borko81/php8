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

        function check_if_file_exists($name) {
            return (file_exists($name) && is_file($name));
        }

        function read_xml($name) {
            $xmlstr = file_get_contents($name);
            $items = new SimpleXMLElement($xmlstr);

            $total_items = 0;
            foreach ($items as $item) {
                $total_items += 1;
                $price = $item->price;
                $name = $item->name;
                $qty = $item->qty;
                echo "<p>$name with price: $price has $qty total left</p>";
            }
            echo "Total items is $total_items";
        }

        $NAME = "data.ini";

        if (check_if_file_exists($NAME)) {
            read_xml($NAME);
        } else {
            echo "Error";
            die();
        }

    ?>
</body>
</html>