<?php
    session_start();
?>

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
        echo "Page Two<br />";
        $user = $_SESSION['username'];
        echo "Welcome $user <br />";

        if (isset($_SESSION['colors'])) {
            foreach($_SESSION['colors'] as $color) {
                echo $color . '<br />';
            }
            //session_destroy();
        }
        var_dump($_SESSION);
    ?>
</body>
</html>