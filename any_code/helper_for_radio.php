<?php

if(isset($_POST["name"]) && isset($_POST["gender"])) {
    $name = htmlspecialchars($_POST["name"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $sex = "";
    switch ($gender) {
        case "M":
            $sex = "Man";
            break;
        case "W":
            $sex = "Fmale";
            break;
    }
    echo "The name is $name and gender is $sex";
} else {
    echo "Error";
}

?>