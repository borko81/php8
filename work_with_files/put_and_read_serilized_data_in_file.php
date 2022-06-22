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

    $FILE_NAME = "data.dat";
    // if file not exists
    // $f = fopen($FILE_NAME, 'w') or die ("Can't open the file");
    // fclose($f);

    $info = array("server"=>"192.168.168.1", "username"=>"root", "password"=>"password");

    // $serialized_data = serialize($info);

    // file_put_contents($FILE_NAME, $serialized_data);

    // //read from data file
    // //$f_open = fopen($FILE_NAME, 'rb') or die ("Can't open the file!");
    
    // $data_stream = file_get_contents($FILE_NAME);
    // $data = unserialize($data_stream);
    // foreach ($data as $key=>$value) {
    //     echo "$key has value: $value<br />";
    // }

    $info_json = json_encode($info);
    file_put_contents($FILE_NAME, $info_json);
    $decoded_data = json_decode(file_get_contents($FILE_NAME), true);
    echo $decoded_data['password'];

    ?>
</body>
</html>