<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--php array_map  -->
    <?php
        $length = [10, 20, 30];
        $areas = [];
        foreach ($length as $l) {
            $areas[] = $l * $l;
        }
        print_r($areas);

        $array_with_map = array_map(function ($c) {
            return $c * $c;
        }, $length);
        print_r($array_with_map);

        class User {
            public $username;
            public $email;

            public function __construct(string $username, string $email) {
                $this->username = $username;
                $this->email = $email;
            }

            public function show_name() {
                return $this->username;
            }

            public function show_email() {
                return $this->email;
            }

        }
        $users = [
            new User('borko', "borko@abv.bg"),
            new User('joro', 'joro@abv.bg')
        ];

        echo "<br />";

        foreach ($users as $u) {
            echo "Username is {$u->show_name()}, email is {$u->show_email()}<br />";
            
        }
    ?>
</body>
</html>