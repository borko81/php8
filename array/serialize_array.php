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

        $A = array();
        for ($i=1; $i<=10; $i++) {
            $A[] = $i;
        }

        var_dump($A);
        echo "<br />";
        $serializer_array = serialize($A);
        print_r($serializer_array);
        echo "<br />";
        setcookie("Q", $serializer_array, time() + 60 * 60);
        unset($A);
        $new_arr = $_COOKIE["Q"];
        var_dump(unserialize($new_arr)[5]);

        // work with strings
        echo "<br />";
        $str = "Hello";
        echo substr($str, 0, 1);
        echo "<br />";
        echo str_repeat("-", 10);
        echo "<br />";
        echo strpos($str, "e");
        echo "<br />";
        if (str_contains($str, strtoupper('h'))) {
            echo "Found at position " . strpos($str, strtoupper('h'));
        }
        echo "<br />";
        echo strtoupper($str);
        echo "<br />";
        echo hash('sha256', "borko");
        echo "<br />";
        // explode
        $names = "one:two:three";
        print_r(explode(":", $names));
    ?>
</body>
</html>