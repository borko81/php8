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
    // work with files

        $f = fopen("key.pem", "rb") or die("Unable to open file");
        
        // read all line
        //echo fread($f, filesize("key.pem"));

        //read one by one line of file
        while (!feof($f)) {
            echo fgets($f) . "<br />";
        }
        fclose($f);

    ?>
</body>
</html>