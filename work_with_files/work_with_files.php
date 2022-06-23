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
        $FILE = "info.csv";
        if (file_exists($FILE)) {
            // $data = file_get_contents($FILE);
            // var_dump($data);

            //return full path
            $path = realpath($FILE);
            $base = dirname($path);
            echo $base . " has size " . disk_free_space($base);
            // show disk space
            
            
        } else {
            echo "File not found";
        }
    ?>
</body>
</html>