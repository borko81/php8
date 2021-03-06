<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract</title>
</head>
<body>
    <?php
        abstract class Person {
            abstract public function greeting();
        }

        class HumanUser extends Person {
            const message = "Hello ";
            public function greeting() {
                echo HumanUser::message ."Human <br/>";
            }
        }
        $user_one = new HumanUser();
        $user_one->greeting();
    ?>
</body>
</html>