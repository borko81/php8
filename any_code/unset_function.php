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
        $variable = "John Doe";
        $names = array("john", "anna", "sam", "henry", "vernoica"); 

        echo $variable;

        unset($variable);
        if(!empty($variable)) {
            echo $variable;
        }
        echo "<br />";

        // simple curl
        $URL = "http://127.0.0.1:8080/api/Server/Status";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $URL);
        $result = curl_exec($ch);
        curl_close($ch);
        $status = json_decode($result)->status;
        echo "<br />";

        // setcoocie
        if(isset($_COOKIE['status'])) {
            $st = $_COOKIE['status'];
            echo "Cookie is: $st";
        }
        // setcookie('status', $status, time() + 1000);

    ?>
</body>
</html>