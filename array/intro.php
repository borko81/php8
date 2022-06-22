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

        $values = [];

        foreach($NS as $k=>$v) {
            $values[] = $v;
            echo "<i style='text-decoration:underline;'>$k</i> has <strong>$v</strong> for parameter<br>";
        }
        var_dump($values);
        echo "<br />";

        // list
        $names = array('First name', 'Second name', 'Last name');
        list($first, $second, $last) = $names;
        echo $second;
        echo "<br />";

        list($server, $user, $password) = array_values($NS);
        echo $server;

        // multi array
        $peoples['Vel'] = array("Name"=>"First", "Address"=>"One street");
        $peoples['Pl'] = array("Name"=>"First", "Address"=>"One street");

        echo "<br />";
        //unset($peoples);
        if ($peoples !=null && array_key_exists('Pi', $peoples)) {
            var_dump($peoples['Pl']['Address']);
        }
        echo "<br />";
        // sorting asoc array
        $server_information = array("den"=>"192.168.1.3", "mail"=>"192.168.1.2", "server"=>"192.168.1.1");
        // sort array by value
        asort($server_information);
        // sort array by key
        ksort($server_information);
        var_dump($server_information);
        echo "<br />";
        // compact array
        $a = "AA";
        $b = "BB";
        $M = compact("a", "b");
        var_dump($M);
        echo $M["a"];
        echo "<br />";

        echo extract($M);

        echo "<br />";




    ?>
</body>
</html>