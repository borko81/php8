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

        $msg = '';

        if (isset($_POST['submit'])) {
            if (!empty($_POST['username'])) {
                $_SESSION['username'] = $_POST['username'];
                header('Location: page_two.php');
            } else {
                $msg = 'Username is required';
            }
            
        }

        echo "Page One<br/>";
        $_SESSION['colors'] = array("Blue", "Yellow", "Green");
        echo "<form method='POST'>";
        echo "<input type='text' name='username'>";
        echo "<span>$msg<span>";
        echo "<button type='submit' name='submit'>Next page</button>";
        echo "</form>";
    ?>
</body>
</html>