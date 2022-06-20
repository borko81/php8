<?php

function check($variable) {
    return trim(
        htmlspecialchars($variable)
    );
}

// if (filter_has_var(INPUT_POST, 'submit_me')
if (isset($_POST['name'])
    && check($_POST['name']) != ""
) {
    $name = check($_POST["name"]);
    $name_config = $name;
    if(isset($_POST['check']) && $_POST["check"] == "1") {
        $name_config = strtoupper($name);
    }

    switch ($name) {
        case "One":
            echo "The name is {$name_config}<br/>";
            break;
        case "Two":
            echo "The name is {$name_config}<br />";
            break;
        default:
            break;
    }
} else {
    echo "Wrong";
}

?>