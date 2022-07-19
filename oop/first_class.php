<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    <?php
        echo "Firt class<br />";
        class Car {
            var $color;
            var $model;

            function show_color() {
                echo "The color is $this->color.<br />";
            }
            function show_model() {
                echo "The model is $this->model.<br />";
            }
            function set_color($user_choice) {
                $this->color = $user_choice;
            }
        }

        class Person {

            public function __construct(
                public string $my_name
             ) {}
        
            function show_name() {
                echo "The name is $this->my_name<br />";
            }

            function __destruct() {
                echo "Destructor<br />";
            }

        }

        $mycar = new Car;
        $mycar->set_color("Blue");
        $mycar->model = "Mazda";
        $mycar->show_color();
        $mycar->show_model();
        echo "<hr />";
        $user = new Person('bb');
        //$user->my_name = 'Name was changed';
        $user->show_name();
    ?>
</body>
</html>