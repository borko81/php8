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
        // declare classs
        class Car {
            public string $color;
            public string $model;

            function __construct(
                public float $tank = 0.0
            ) {}

            public function ShowInfo() {
                return "The car $this->model has $this->color color<br />";
            }

            public function fill($float) {
                $this->tank += $float;
            }
            public function show_tank() {
                return $this->tank . "<br />";
            }
            public function ride($float) {
                if ($this->tank >= $float) {
                    echo "Successfully ride<br />";
                    $this->tank -= $float;
                } else {
                    $expected = $float - $this->tank;
                    echo "Unseccessfully, need more $expected galon<br />";
                }
            }
        }
        // instance
        $bmw = new Car();
        $bmw->model = 'BMW';
        $bmw->color = "Red";

        echo $bmw->ShowInfo();
        $bmw->fill(100);
        $bmw->ride(101);
        echo $bmw->show_tank();


    ?>
</body>
</html>