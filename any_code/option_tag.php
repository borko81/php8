<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            max-width: 350px;
            box-shadow: 0 2px 10px black;
            margin: 50px auto;
            display: flex;
            text-align: center;
        }
        select {
            width: 100%;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <?php

        echo $_SERVER['REMOTE_ADDR'];
        echo $_SERVER['SCRIPT_FILENAME'];
        echo $_SERVER['SERVER_SOFTWARE'];

        echo "<br />";
        function add_year_name($name) {
            return "The year is $name";
        }

        if (isset($_POST["submit_me"])
        && isset($_POST["year"])
        && (!empty($_POST["year"]))
        ) {

            if (filter_input(INPUT_POST, "year", FILTER_VALIDATE_INT)) {
                $year = $_POST['year'];
                switch ($year) {
                    case "2020":
                        echo add_year_name("2020");
                        break;
                    case "2021":
                        echo add_year_name("2021");
                        break;
                    case "2022":
                        echo add_year_name("2022");
                        break;
                }
            } else {
                echo "Not int";
            }
            
        }
    ?>
    <div class="container">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            <select name="year" size="1">
                <option value="" disabled selected>Choice options</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
            </select>
            <br />
            <input type="submit" value="OK" name="submit_me">
            <input type="reset" value="Reset" name="reset_me">
        </form>

    </div>
</body>
</html>