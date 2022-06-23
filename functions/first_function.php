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
        $A = 123;
        function not_use_global() {
            try {
                echo $A;
            } catch(Exception $e) {
                echo $e->getMessage();
            }
        }
        function use_variable_as_global() {
            global $A;
            echo $A;
        }

        // function with default value
        function with_default_value($a, $b=100) {
            if (!is_numeric($a) || !is_numeric($b)) {
                echo "Error with parameter value";
                die();
            }
            echo $a + $b;
        }

        not_use_global();
        echo "<br />";
        use_variable_as_global();
        echo "<br />";
        with_default_value(1, 2);

        // work with generator
        function declare_gen($start, $end, $step=1) {
            for($i=$start; $i<=$end; $i+=$step) {
                yield $i;
            }
        }
        
        echo "<br />";

        foreach(declare_gen(1, 10, 2) as $num) {
            echo $num . ' ';
        }
    ?>
</body>
</html>