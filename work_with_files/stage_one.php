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
        // with file_get_contents
        echo "<br />";
        $new_open_file = file_get_contents("key.pem");
        echo $new_open_file;
    
        echo "<br />";
        echo "<br />";
        // read csv file from second line to the end of file.
        $FILE = fopen("info.csv", 'r') or die ("Cannot open this file!");
        $line = 0;

        while ($array = fgetcsv($FILE, 1024, ";")) {
            $line += 1;
            if ($line == 1) {
                continue;
            }
            $name = $array[0];
            $address = $array[1];
            echo "The name is $name and address is $address<br />";
        }
        
        fclose($FILE)
    

    ?>
</body>
</html>